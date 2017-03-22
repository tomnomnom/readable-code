// Comments don't have to be terse.
package main

// Fields splits the string s around each instance of one or more consecutive white space
// characters, as defined by unicode.IsSpace, returning an array of substrings of s or an
// empty list if s contains only white space.
func Fields(s string) []string {
	return FieldsFunc(s, unicode.IsSpace)
}

// Docs should live with the code.
