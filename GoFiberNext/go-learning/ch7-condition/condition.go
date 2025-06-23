package main

import (
	"fmt"
)

func Condition() {
	// if condition
	a := 10
	if a > 5 {
		fmt.Println("a is greater than 5")
	} else {
		fmt.Println("a is less than or equal to 5")
	}

	// switch condition
	switch a {
	case 10:
		fmt.Println("a is 10")
	case 20:
		fmt.Println("a is 20")
	default:
		fmt.Println("a is neither 10 nor 20")
	}

	// for loop with condition
	for i := 0; i < 5; i++ {
		if i%2 == 0 {
			fmt.Println(i, "is even")
		} else {
			fmt.Println(i, "is odd")
		}
	}
}
