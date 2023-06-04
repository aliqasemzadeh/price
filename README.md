# Price format 

This package helps you to display number and price in format that you want.

## Installation

Just you need composer and run `composer require aliqasemzadeh/price`

## Usage
Simple Usage of price format for crypto.
Input:
`8.64E-6`

Code:
`AliQasemzadeh\Price\Format::price($number)`

Output:
`0.082129`


Add more float precision
Code:
`AliQasemzadeh\Price\Format::formatFloat($number, $precision)`




