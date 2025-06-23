package main

import (
	"fmt"
	"html"
)

func main() {
	// Declare a variable of type int
	var age int8 = 30
	fmt.Println("Age:", age)

	// Declare a variable of type string
	var name string = "Alice"
	fmt.Println("Name:", name)

	// Declare a variable of type float64
	var height float64 = 5.7
	fmt.Println("Height:", height)

	// Declare a variable of type bool
	var isStudent bool = true
	fmt.Println("Is Student:", isStudent)

	var str = "<h1>111111</h1>"
	fmt.Println(str)

	var str_enc = html.EscapeString(str)
	fmt.Println("Escaped String:", str_enc)

	var str_uenc = html.UnescapeString(str)
	fmt.Println("Un Escaped String:", str_uenc)
}

func mathOperator() {

}
