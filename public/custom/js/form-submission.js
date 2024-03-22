async function submitForm(thisContext, callback = null){
    /*
        Cara pakai :
        1. Panggil fungsi ini pada saat event submit, bisa diletakkan sebagai attribut atau sebagai event handler
        2. Element yang memanggil fungsi ini harus berupa form yang memiliki attribute action seperti form pada umumnya
        3. Tentukan method form, jika tidak ditentukan maka akan menggunakan method default (POST)
        4. Jika ada callback, passing pada argument kedua. Callback tidak wajib ada (opsional)
    */
    
    let _el         =   $(thisContext);

    let _actionURL  =   _el.attr('action');
    let _type       =   _el.attr('method');
    let _formData   =   _el.serialize();
    let _formDataOptions    =   {};

    let _useFormData =   false;
    if(_el.attr('enctype') != undefined){
        let _enctype    =   _el.attr('enctype');
        if(_enctype == 'multipart/form-data'){
            _useFormData    =   true;
        }
    }

    if(_useFormData){
        _formData           =   new FormData(document.getElementById(_el.attr('id')));
        _formDataOptions    =   {
            processData     :   false,
            cache           :   false,
            contentType     :   false
        };
    }

    let _buttonSubmit       =   _el.find('[type=submit]');
    let _buttonSubmitText   =   _buttonSubmit.text();

    _buttonSubmit.prop('disabled', true).text('Processing ..');

    if(_actionURL == undefined){
        alert('Please set action url in form tag!');
        _buttonSubmit.prop('disabled', false).text(_buttonSubmitText);
        return false;
    }
    
    $.ajax({
        url     :   _actionURL,
        data    :   _formData,
        type    :   (_type == undefined)? 'POST' : _type,
        ..._formDataOptions,
        success :   (responseFromServer) => {
            _buttonSubmit.prop('disabled', false).text(_buttonSubmitText);
            if(callback != null){
                callback(responseFromServer);
            }
        }
    })    
}