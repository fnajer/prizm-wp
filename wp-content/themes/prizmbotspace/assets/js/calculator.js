const MINIMAL_REINVEST = 1;
const PERIOD_PROFIT = 1; // 24 hours
const COUNT_PERIODS = 365; // 365 дней

// control points
const DAY_CONTROL_POINT = 0;
const MONTH_CONTROL_POINT = 29;
const YEAR_CONTROL_POINT = 364;
let pzmPerDay = null;
let pzmPerMonth = null;
let pzmPerYear = null;
let percentPerDay = null;
let percentPerMonth = null;
let percentPerYear = null;

// must be changing from admin panel. possible through data attributes
// from php file to js.
const PERCANTAGE_OF_100 = 0.7;
const PERCANTAGE_OF_1000 = 0.8;
const PERCANTAGE_OF_10000 = 0.9;
const PERCANTAGE_LESS_100 = 0;
const PERCENTAGE_LIST = [PERCANTAGE_OF_100, PERCANTAGE_OF_1000, PERCANTAGE_OF_10000];

let currentBalanceValue = 100, 
    currentTimeValue= 24,
    profitsList = [0, 0, 0],
    currentPeriod;

function reinvestTimeIsCome(timeReinvestInDays, currentTime) { return timeReinvestInDays - currentTime === 0; }
function canBeReinvest(value) { return value >= MINIMAL_REINVEST; }
function makeReinvest(balance, profit) { return balance + profit; }

function isControlPoint(period) {
  return period === DAY_CONTROL_POINT || 
        period === MONTH_CONTROL_POINT ||
        period === YEAR_CONTROL_POINT;
}
function saveControlPoint(period, srcBalance, balanceValuesList, profitsList) {
  if (period === DAY_CONTROL_POINT) return pzmPerDay = calculatePzmPerRange(balanceValuesList, profitsList, srcBalance);
  if (period === MONTH_CONTROL_POINT) return pzmPerMonth = calculatePzmPerRange(balanceValuesList, profitsList, srcBalance);
  if (period === YEAR_CONTROL_POINT) return pzmPerYear = calculatePzmPerRange(balanceValuesList, profitsList, srcBalance);
}
function calculatePzmPerRange(balanceValuesList, profitsList, srcBalance) {
  const pzmPerRangeList = [];
  for (let i = 0; i < balanceValuesList.length; i++) {
    pzmPerRangeList.push(
      (balanceValuesList[i] + profitsList[i]) - srcBalance
    )
  }
  return pzmPerRangeList;
}
function calculateCurrentProfit(balanceValuesList, pastProfitList) {
  const profitList = [];
  for (let i = 0; i < PERCENTAGE_LIST.length; i++) {
    profitList.push(
      (balanceValuesList[i] * PERCENTAGE_LIST[i] / 100) + pastProfitList[i]
    )
  }
  return profitList;
}
function calculatePrizm(srcBalanceValue, timeValueInHrs) {
  const timeReinvestInDays = timeValueInHrs / 24;
  let currentTime = 0;

  let balanceValuesList = [srcBalanceValue, srcBalanceValue, srcBalanceValue];

  for (
    currentPeriod = 0; 
    currentPeriod < COUNT_PERIODS; 
    currentPeriod += PERIOD_PROFIT
  ) { // 0 period - that is already after first 24 hours
    profitsList = calculateCurrentProfit(balanceValuesList, profitsList);

    if (isControlPoint(currentPeriod))
      saveControlPoint(currentPeriod, srcBalanceValue, balanceValuesList, profitsList);

    currentTime += PERIOD_PROFIT;

    if (reinvestTimeIsCome(timeReinvestInDays, currentTime)) {
      for (let i = 0; i < profitsList.length; i++) {
        if (canBeReinvest(profitsList[i])) {
          balanceValuesList[i] = makeReinvest(balanceValuesList[i], profitsList[i]);
          profitsList[i] = 0;
        }
      }
      currentTime = 0;
    }
  }
  profitsList = [0, 0, 0];
  // logPzm();

  calculatePercentage(srcBalanceValue);
  // console.log(percentPerDay,
  //   percentPerMonth,
  //   percentPerYear)
  return {
    pzmPerDay,
    pzmPerMonth,
    pzmPerYear,
    percentPerDay,
    percentPerMonth,
    percentPerYear,
  }
}

function calculatePercentagePerRange(pzmPerRange, srcBalanceValue) {
  const percentPerRangeList = [];
  for (let i = 0; i < pzmPerRange.length; i++) {
    const result = (pzmPerRange[i] * 100) / srcBalanceValue;
    percentPerRangeList.push(isNaN(result) ? 0 : result);
  }
  return percentPerRangeList;
}
function calculatePercentage(srcBalanceValue) {
  percentPerDay = calculatePercentagePerRange(pzmPerDay, srcBalanceValue);
  percentPerMonth = calculatePercentagePerRange(pzmPerMonth, srcBalanceValue);
  percentPerYear = calculatePercentagePerRange(pzmPerYear, srcBalanceValue);
}

// console.log(`${currentPeriod}: currentProfit: ${currentProfit}, 
//     balanceValue: ${balanceValue},
//     currentPercent: ${currentPercent},
//     srcBalanceValue: ${srcBalanceValue},
//     currentTime: ${currentTime}, timeReinvestInDays: ${timeReinvestInDays}\n`);
function logPzm() {
  console.log(`Day: ${pzmPerDay}`);
  console.log(`Month: ${pzmPerMonth}`);
  console.log(`Year: ${pzmPerYear}`);
}