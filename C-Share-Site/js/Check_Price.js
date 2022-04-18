function checkPrice(){


    if(document.getElementById('origin').value == 'Dhanmondi' && document.getElementById('destination').value == 'NSU'){
        var prices = 100*document.getElementById('seat').value;
    }
    else if(document.getElementById('origin').value == 'Dhanmondi' && document.getElementById('destination').value == 'Uttara'){
        var prices = 120*document.getElementById('seat').value;
    }
    else if(document.getElementById('origin').value == 'Uttara' && document.getElementById('destination').value == 'Dhanmondi'){
        var prices = 120*document.getElementById('seat').value;
    }
    else if(document.getElementById('origin').value == 'Uttara' && document.getElementById('destination').value == 'NSU'){
        var prices = 60*document.getElementById('seat').value;
    }
    else if(document.getElementById('origin').value == 'NSU' && document.getElementById('destination').value == 'Uttara'){
        var prices = 60*document.getElementById('seat').value;
    }
    else if(document.getElementById('origin').value == 'NSU' && document.getElementById('destination').value == 'Dhanmondi'){
        var prices = 100*document.getElementById('seat').value;
    }
    
    document.getElementById('price').value = prices;
    return document.getElementById('price').value;
}