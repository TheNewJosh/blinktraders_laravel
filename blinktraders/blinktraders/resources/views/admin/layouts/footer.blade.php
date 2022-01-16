<script src="{{ asset('js/jquery-3-4-1.min.js') }}"></script>

<script src="{{ asset('js/aos.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/bs4pop.js') }}"></script>

<script src="{{ asset('js/main-user.js') }}" type="application/javascript"></script>

<script>
    $(document).on('click', '#toggle-bar-menu', function(){                
        document.querySelector('#toggle-bar-menu-area').classList.toggle("mrda-display-none");
        document.querySelector('#toggle-bar-menu-head').classList.toggle("heading-adm-fixed");
        document.querySelector('#mrda-margin-move').classList.toggle("mrda-margin-move");
    });
    
    if(window.screen.width < 600){
        document.querySelector('#toggle-bar-menu-area').classList.add("mrda-display-none");
        document.querySelector('#toggle-bar-menu-head').classList.remove("heading-adm-fixed");
        document.querySelector('#mrda-margin-move').classList.add("mrda-margin-move");
    }
</script>