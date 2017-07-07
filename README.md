# pb-packs-mofloginapp
playbook for building web app with login window

# extra-vars description

| variable | description |
|:--------|:------------------------------------|
| prjpath | path to project directory for httpd | 
| appname | app name |

# example

```
ansible-playbook ./start.yml --extra-vars "prjpath=/path/to/prjdir/ appname=name"
```

