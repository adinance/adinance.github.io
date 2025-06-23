package greeting

import (
	"fmt"

	personal "github.com/adinance/adinance.github.io/tree/main/GoFiberNext/go-learning/greeting/internal"
)

func SayGreeting() {

	personal.SayPersonalGreeting()
	fmt.Println("Greeting from the greeting package!")
}
