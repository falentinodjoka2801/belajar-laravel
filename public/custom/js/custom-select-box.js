async function hirarki(thisContext, callback = null){
    let _el         =   $(thisContext);
    let _tingkat    =   _el.data('tingkat');

    let _nextTingkat    =   _tingkat + 1;
    let _selectedValue  =   _el.val();

    let _listElementDibawahnya  =   $('.hirarki').filter(function(){
        return $(this).data('tingkat') > _tingkat;
    });

    let _listData   =   [];

    if(_listElementDibawahnya.length >= 1){
        _listElementDibawahnya.each((index, element) => {
            let _jQueryElement  =   $(element);

            let _defaultText    =   _jQueryElement.data('defaultText');
            _defaultText        =   (_defaultText == undefined)? 'Pilih' : _defaultText;

            let _optionsTagHTML       =   `<option>-- ${_defaultText} --</option>`;

            let _elementTingkat =   _jQueryElement.data('tingkat');
            let _elementURL     =   _jQueryElement.data('url');
            let _elementDataSrc =   _jQueryElement.data('dataSrc');
            let _optionValueSrc =   _jQueryElement.data('optionValueSrc');
            let _optionTextSrc  =   _jQueryElement.data('optionTextSrc');

            _optionValueSrc         =   (_optionValueSrc == undefined)? 'value' : _optionValueSrc;
            _optionTextSrc          =   (_optionTextSrc == undefined)? 'text' : _optionTextSrc;

            if(_elementTingkat == _nextTingkat){

                $.ajax({
                    async   :   false,
                    url     :   `${_elementURL}/${_selectedValue}`,
                    success :   (responseFromServer) => {
                        let dataFromResponse    =   responseFromServer.data;
                        _listData   =   dataFromResponse[_elementDataSrc];
                    }
                });

                if(_listData.length >= 1){
                    _listData.forEach((dataItem) => {
                        _optionsTagHTML   +=  `<option value='${dataItem[_optionValueSrc]}'>${dataItem[_optionTextSrc]}</option>`;
                    });
                }
            }
            
            _jQueryElement.html(_optionsTagHTML);
        });
    }
    
    if(callback != null){
        callback(_listData);
    }
}
