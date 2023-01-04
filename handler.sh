printf "\ec\e[40;32m"
for n in $(seq 0 1000);
do echo "...."
e=$(date)
echo $e > "/tmp/function.txt"
sudo cp  "/tmp/function.txt" "/var/www/html/function.txt"
sleep 5
done