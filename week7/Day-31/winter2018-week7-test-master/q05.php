<?php

// the variables are deliberately initialized with null so that you don't think about their current values
// their current value can be any number
$price = null; // integer
$in_stock = null; // integer
$on_sale = null; // boolean
$max_price = null; // integer
$amount_wanted = null; // integer

// 1.
if($amount_wanted > 0) {
  // the amount the customer wants is bigger than 0
}

// 2.
if($in_stock >= $amount_wanted) {
  // the amount in stock is greater or equal to the amount wanted by the customer
}

// 3.
if($price <= $max_price) {
  // the price is lower or equal to the maximum price the customer is willing to pay or the product is on sale
}
