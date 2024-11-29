# Simple 3tier-architecture
테스트 환경</br>
\# Rocky Linux 9.5</br>
</br>
버전</br>
\# Docker </br>
\# nginx:latest </br>
\# php:7.4-apache </br>
\# mysql:8.0 </br>
</br>
경로 </br>
./3tier-architecture </br>
</br>
명령어 </br>
docker compose up --build --detach </br>
docker compose -f docker-compose.yml up --build --detach </br>
</br>
samba(cifs)를 활용하여 윈도우로 DB 백업</br>
윈도우 공유 폴더 생성 방법</br>
데이터를 저장할 docker_backup 폴더 생성 -> 오른쪽 클릭 -> 속성 -> 공유 탭 -> 공유 -> everyone 추가</br>
폴더 네트워크 경로 확인 </br>
-> \\<Windows_IP|Windows_USER_NAME>\docker_backup</br>
-> \\192.168.17.1\docker_backup</br>
</br>
Rocky Linux Command(host)</br>
dnf install -y cifs-utils</br>
mkdir -p /mnt/backup</br>
mount -t cifs -o username=<Windows_UserName>,password=<Windows_Password>,rw,file_mode=0777,dir_mode=0777 //192.168.17.1/docker_backup /mnt/backup</br>
df -h</br>
</br>
\# 192.168.17.1 IP 주소는 Windows IP이다.
</br>
samba 자동 마운트(연결 유지)</br>
vi /etc/fstab</br>
//192.168.17.1/docker_backup /mnt/backup cifs username=<Windows_UserName>,password=<Windows_Password>,rw,file_mode=0777,dir_mode=0777 0 0</br>
\# 마운트 확인
mount -a</br>
df -h</br>
