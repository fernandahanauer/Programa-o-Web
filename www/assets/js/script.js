$(document).ready(()=>{
    $('section').load('site/Home.php')

    $('#btnHome').click(() =>{
        $('section').load('site/Home.php')
    })

    $('#btnAbout').click(()=>{
        $('section').load('site/about.php')
    })

    $('#btnProducts').click(()=>{
        $('section').load('site/products.php')
    })

    $('#btnContacts').click(()=>{
        $('section').load('site/contacts.php')
    })
})