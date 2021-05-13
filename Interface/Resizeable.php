<?php
namespace Interface;

interface Resizeable
{
    const PERCENT = 100;
    function resize( int|float $percent);
}