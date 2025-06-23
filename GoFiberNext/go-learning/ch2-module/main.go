package main

import (
	"fmt"

	"github.com/adinance/adinance.github.io/tree/main/GoFiberNext/go-learning/greeting"
	"github.com/google/uuid"

	_ "main"
)

func main() {
	// Print

	var id string = uuid.New().String()

	var x int = 10
	_ = x

	fmt.Println("UUID: ", id)

	greeting.SayGreeting()
}
