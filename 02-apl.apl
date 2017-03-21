txt←'<nowiki><html><body><p>This is <em>emphasized</em> text.</p></body></html></nowiki>'
⎕←{⍵/⍨~{⍵∨≠\⍵}⍵∊'<>'}txt

⍝ Output: This is emphasized text
