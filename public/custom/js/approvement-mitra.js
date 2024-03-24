async function _onApprove(thisContext, approvementAction, callback = null){
    let _title          =   'Approvement Mitra';
    let _actionString   =   null;
    let _textColor      =   null;
    if(approvementAction == _approvementApproved){
        _actionString   =   'menyetujui';
        _textColor      =   'text-success';
    }
    if(approvementAction == _approvementRejected){
        _actionString   =   'menolak';
        _textColor      =   'text-danger';
    }

    if(_actionString != null){
        let _el     =   $(thisContext);
        let _url    =   _el.data('url');
        let _nama   =   _el.data('nama');
        let _konfirmasi =   await konfirmasi(_title, `<p class='text-muted'>Apakah anda yakin akan <b class='${_textColor}'>${_actionString}</b> mitra <b class='text-primary'>${_nama}</b>?</p>`);
        if(_konfirmasi){
            $.ajax({
                url     :   _url,
                data    :   `approvement=${approvementAction}`,
                type    :   'POST',
                success     :   async (responseFromServer) => {
                    let _status     =   responseFromServer.status;
                    let _message    =   responseFromServer.message;

                    let _messageHTML    =   (_message != null)? _message : (_status)? 'Berhasil!' : 'Gagal!';
                    let _icon           =   (_status)? 'success' : 'error';

                    await notifikasi(_title, _messageHTML, _icon);
                    if(_status){
                        if(callback != null){
                            callback.call();
                        }
                    }
                }
            });
        }
    }
}