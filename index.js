$(Document).ready(() => {

    const $cards = $('.card');

    $cards.on('mouseenter', (e)=>{
        $(e.currentTarget).addClass('border-info');

    });
    $cards.on('mouseleave', (e)=>{
        $(e.currentTarget).removeClass('border-info');
    });

});