package main

import (
	"fmt"
)

func SampleArray() {
	// Declare and initialize an array of integers
	// var arr = [5]int{1, 2, 3, 4, 5}

	// // Print the array
	// fmt.Println("Array:", arr)

	// // Access and print the first element of the array
	// fmt.Println("First element:", arr[0])

	// // Modify the second element of the array
	// arr[1] = 10

	// // Print the modified array
	// fmt.Println("Modified Array:", arr)

	var f [3]string
	f[0] = "Hello"
	f[1] = "World"
	f[2] = "Go"
	fmt.Println("String Array:", f)
	fmt.Println("Length of array:", len(f))
	fmt.Println("Length of string array:", len(f))
	fmt.Println("Capacity of array:", cap(f))
	fmt.Println("Capacity of string array:", cap(f))
	fmt.Println("Array type:", fmt.Sprintf("%T", arr))
	fmt.Println("String array type:", fmt.Sprintf("%T", f))
	fmt.Println("Array size in bytes:", len(f)*4)         // Assuming int is 4 bytes
	fmt.Println("String array size in bytes:", len(f)*16) // Assuming string is 16 bytes (pointer + length + capacity)
	fmt.Println("Array is empty:", len(f) == 0)
	fmt.Println("String array is empty:", len(f) == 0)
	fmt.Println("Array is nil:", arr == [5]int{})
	fmt.Println("String array is nil:", f == [3]string{})
	fmt.Println("Array is equal to another array:", arr == [5]int{1, 2, 3, 4, 5})
	fmt.Println("String array is equal to another string array:", f == [3]string{"Hello", "World", "Go"})
	fmt.Println("Array is not equal to another array:", arr != [5]int{1, 2, 3, 4, 6})
	fmt.Println("String array is not equal to another string array:", f != [3]string{"Hello", "World", "Golang"})
	fmt.Println("Array contains 3:", contains(arr, 3))
	fmt.Println("String array contains 'Go':", containsString(f, "Go"))
	fmt.Println("Array index of 3:", indexOf(arr, 3))
	fmt.Println("String array index of 'Go':", indexOfString(f, "Go"))
	fmt.Println("Array slice from index 1 to 3:", arr[1:4])
	fmt.Println("String array slice from index 0 to 2:", f[0:3])
	fmt.Println("Array slice with capacity 2:", arr[1:3:3])
	fmt.Println("String array slice with capacity 2:", f[1:3:3])
	fmt.Println("Array with range loop:")
	for i, v := range arr {
		fmt.Printf("Index: %d, Value: %d\n", i, v)
	}
	fmt.Println("String array with range loop:")
	for i, v := range f {
		fmt.Printf("Index: %d, Value: %s\n", i, v)
	}
	fmt.Println("Array with for loop:")
	for i := 0; i < len(f); i++ {
		fmt.Printf("Index: %d, Value: %d\n", i, arr[i])
	}
	fmt.Println("String array with for loop:")
	for i := 0; i < len(f); i++ {
		fmt.Printf("Index: %d, Value: %s\n", i, f[i])
	}

}
