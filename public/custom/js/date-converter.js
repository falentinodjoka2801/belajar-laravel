function convertDate(date = null, separator='/', stringMonth = false){
	if(date !== null){
		let _dateObject 	=	new Date(date);

		let _date 	=	_dateObject.getDate();
		if(_date <= 9){
			_date 	=	`0${_date}`;
		}
		let _month 	=	_dateObject.getMonth() + 1;
		if(stringMonth){
			_month 	=	getMonthName(_month);
		}else{
			if(_month <= 9){
				_month 	=	`0${_month}`;
			}
		}

		let _year 	=	_dateObject.getFullYear();

		let _convert	=	`${_date}${separator}${_month}${separator}${_year}`;

		return _convert;
	}

	return '';
}
function convertDateTime(dateTime = null, separator='/', stringMonth = false){
	if(dateTime !== null){
		let _dateObject 	=	new Date(dateTime);

		let _date 	=	_dateObject.getDate();
		if(_date <= 9){
			_date 	=	`0${_date}`;
		}
		let _month 	=	_dateObject.getMonth() + 1;
		if(stringMonth){
			_month 	=	getMonthName(_month);
		}else{
			if(_month <= 9){
				_month 	=	`0${_month}`;
			}
		}

		let _year 	=	_dateObject.getFullYear();

		let _hour		=	_dateObject.getHours();
		if(_hour <= 9){
			_hour 	=	`0${_hour}`;
		}
		let _minute		=	_dateObject.getMinutes();
		if(_minute <= 9){
			_minute 	=	`0${_minute}`;
		}
		let _seconds	=	_dateObject.getSeconds();
		if(_seconds <= 9){
			_seconds 	=	`0${_seconds}`;
		}

		let _convert	=	`${_date}${separator}${_month}${separator}${_year} ${_hour}:${_minute}:${_seconds}`;

		return _convert;
	}

	return '';
}

function getMonthName(month = 0){
	let _monthName	=	'';

	if(month == 1){
		_monthName 	=	`Januari`;
	}else if(month == 2){
		_monthName 	=	`Februari`;
	}else if(month == 3){
		_monthName 	=	`Maret`;
	}else if(month == 4){
		_monthName 	=	`April`;
	}else if(month == 5){
		_monthName 	=	`Mei`;
	}else if(month == 6){
		_monthName 	=	`Juni`;
	}else if(month == 7){
		_monthName 	=	`Juli`;
	}else if(month == 8){
		_monthName 	=	`Agustus`;
	}else if(month == 9){
		_monthName 	=	`September`;
	}else if(month == 10){
		_monthName 	=	`Oktober`;
	}else if(month == 11){
		_monthName 	=	`November`;
	}else if(month == 12){
		_monthName 	=	`Desember`;
	}

	return _monthName;
}
