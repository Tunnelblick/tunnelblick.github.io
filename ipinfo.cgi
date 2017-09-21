#!/usr/bin/lua

-- ipaddress.cgi
--
-- Returns the remote IP address, remote port, and server address, separated by commas

io.write("Status: 200 OK\r\nPragma: no-cache\r\nContent-type:text/plain\r\n\r\n")
io.write(os.getenv("REMOTE_ADDR")..","..os.getenv("REMOTE_PORT")..","..os.getenv("SERVER_ADDR"))

