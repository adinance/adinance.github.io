package main

import "fmt"

func TypeConvert() {

	var i int = 42
	var f float64 = float64(i) // Convert int to float64

	fmt.Println("Converted int to float64:", f)

	var err error = nil
	if err != nil {
		fmt.Println("Error occurred:", err)
	} else {
		fmt.Println("No error occurred")
	}

}
