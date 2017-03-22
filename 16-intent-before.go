package main

import (
	"fmt"
	"os"
	"syscall"
	"unsafe"
)

func main() {
	// We need to check if the output is a terminal or not by doing this... Thing.
	var termios syscall.Termios
	_, _, err := syscall.Syscall6(
		syscall.SYS_IOCTL, os.Stdout.Fd(), syscall.TCGETS, uintptr(unsafe.Pointer(&termios)), 0, 0, 0,
	)
	if err == 0 {
		// The output is a terminal!
		fmt.Println("output is a terminal")
	}
}
