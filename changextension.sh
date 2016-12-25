# echo $0
# echo $1
for i in *
do 
	if [ -f $i ]
	then
		ext="${i##*.}"
		filename="${i%.*}"
		if [ $ext == $1 ]
		then
			mv $i $filename.$2
		fi
	fi
done
