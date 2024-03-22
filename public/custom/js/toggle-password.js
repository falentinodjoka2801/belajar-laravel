async function togglePassword(thisContext, parentElement){
    let _parent =   $(parentElement);

    let _passwordElements   =   _parent.find('.password');
    _passwordElements.each((_, passwordElement) => {
        let _element            =   $(passwordElement);

        let _type               =   _element.attr('type');
        let _isTypePassword     =   _type == 'password';

        _element.attr('type', (_isTypePassword)? 'text' : 'password');
        
        let _passwordIconElement    =   _parent.find('.password-icon');
        _passwordIconElement.attr('class', (_isTypePassword)? 'fa fa-eye-slash password-icon' : 'fa fa-eye password-icon');
    });
}