// Comment the 'why', not the 'how'
package main

// quoteString takes a string and returns a quoted and
// escaped string valid for use in gron output
func quoteString(s string) string {

	out := &bytes.Buffer{}

	for _, r := range s {

		// \u2028 and \u2029 are separator runes that are not valid
		// in javascript strings so they must be escaped.
		// See http://timelessrepo.com/json-isnt-a-javascript-subset
		if r == '\u2028' {
			out.WriteString(`\u2028`)
			continue
		}
		if r == '\u2029' {
			out.WriteString(`\u2029`)
			continue
		}

		// ...
	}
}
