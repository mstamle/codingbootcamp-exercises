function salary(rate,hours,days) {
    return rate * hours * days;
}


function taxed_salary(rate,hours,days,tax) {
    return salary(rate,hours,days)*(1-tax);
}