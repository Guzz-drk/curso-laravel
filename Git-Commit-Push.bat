git add .
set dataHora=%date:~0,2%/%date:~3,2%/%date:~6,4%-%time:~0,2%h%time:~3,2%m%time:~6,2%s
git commit -m "Commit de %dataHora%"
git push -u origin main
timeout 5 