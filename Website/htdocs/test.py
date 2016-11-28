f = open('/Applications/XAMPP/xamppfiles/htdocs/command.txt', 'r')
value = f.read()
if value == "1":
    print "I should processing the code"
else:
    print "sorry, I am waiting for the command"
