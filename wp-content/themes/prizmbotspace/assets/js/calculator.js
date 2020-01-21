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

let currentBalanceValue = 100, 
    currentTimeValue= 24,
    currentPercent,
    currentProfit = 0,
    currentPeriod;

function reinvestTimeIsCome(timeReinvestInDays, currentTime) { return timeReinvestInDays - currentTime === 0; }
function canBeReinvest(value) { return value > MINIMAL_REINVEST; }

function makeReinvest(balance, profit) { return balance + profit; }
function getCurrentPercent(value) {
  if (value >= 10000) return PERCANTAGE_OF_10000;
  if (value >= 1000) return PERCANTAGE_OF_1000;
  if (value >= 100) return PERCANTAGE_OF_100;
  return PERCANTAGE_LESS_100;
}
function isControlPoint(period) {
  return period === DAY_CONTROL_POINT || 
        period === MONTH_CONTROL_POINT ||
        period === YEAR_CONTROL_POINT;
}
function saveControlPoint(period, srcBalance, currentBalance) {
  if (period === DAY_CONTROL_POINT) return pzmPerDay = currentBalance - srcBalance;
  if (period === MONTH_CONTROL_POINT) return pzmPerMonth = currentBalance - srcBalance;
  if (period === YEAR_CONTROL_POINT) return pzmPerYear = currentBalance - srcBalance;
}
function calculateCurrentProfit(balanceValue, currentPercent) { return balanceValue * currentPercent / 100 }
function calculatePrizm(srcBalanceValue, timeValueInHrs) {
  const timeReinvestInDays = timeValueInHrs / 24;
  let currentTime = 0;

  let balanceValue = srcBalanceValue;
  let currentPercent = getCurrentPercent(balanceValue);

  for (
    currentPeriod = 0; 
    currentPeriod < COUNT_PERIODS; 
    currentPeriod += PERIOD_PROFIT
  ) { // 0 period - that is already after first 24 hours
    currentProfit += calculateCurrentProfit(balanceValue, currentPercent);

    if (isControlPoint(currentPeriod))
      saveControlPoint(currentPeriod, srcBalanceValue, balanceValue + currentProfit);

    currentTime += PERIOD_PROFIT;

    if (reinvestTimeIsCome(timeReinvestInDays, currentTime))
      if (canBeReinvest(currentProfit)) {
        balanceValue = makeReinvest(balanceValue, currentProfit);
        currentProfit = 0;
        currentTime = 0;
        currentPercent = getCurrentPercent(balanceValue);
      } else {
        currentTime = 0;
      }
  }
  currentProfit = 0;
  logPzm();

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

function calculatePercentage(srcBalanceValue) {
  percentPerDay = pzmPerDay * 100 / srcBalanceValue;
  percentPerMonth = pzmPerMonth * 100 / srcBalanceValue;
  percentPerYear = pzmPerYear * 100 / srcBalanceValue;
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