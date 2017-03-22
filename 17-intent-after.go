package main

import (
	"fmt"
	"os"
	"syscall"
	"unsafe"
)

func main() {
	// This doesn't even really need a comment
	if isATerminal(os.Stdout.Fd()) {
		fmt.Println("output is a terminal")
	}
}

func isATerminal(fd uintptr) bool {
	var termios syscall.Termios
	_, _, err := syscall.Syscall6(
		syscall.SYS_IOCTL, fd, syscall.TCGETS, uintptr(unsafe.Pointer(&termios)), 0, 0, 0,
	)
	return err == 0
}
