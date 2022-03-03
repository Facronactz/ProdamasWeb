@extends('layouts.desain')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

        <title>Prodamas Plus</title>

        <!--Goofle Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />

        <!--font awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

        <!--CSS-->
        <link rel="stylesheet" href="css/peta.css">
    </head>
    <body>
        {{-- <div  class='row' > --}}
            <div class='tableauPlaceholder' id='viz1642533848968' style='position: relative'>
                <object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
                    <param name='embed_code_version' value='3' /> <param name='site_root' value='' />
                    <param name='name' value='GeomapWebsite&#47;Dashboard1' /><param name='tabs' value='no' />
                    <param name='toolbar' value='yes' /><param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' /><param name='display_count' value='yes' />
                    <param name='language' value='en-US' /><param name='filter' value='publish=yes' />
                </object>
            </div>  
        {{-- </div> --}}
            
        <script type='text/javascript'>                    
            var divElement = document.getElementById('viz1642533848968');                    
            var vizElement = divElement.getElementsByTagName('object')[0];                    
            if ( divElement.offsetWidth > 800 ) 
            { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} 
            else if ( divElement.offsetWidth > 500 ) 
            { vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} 
            else { vizElement.style.width='100%';vizElement.style.height='727px';}                     
            var scriptElement = document.createElement('script');                    
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
            vizElement.parentNode.insertBefore(scriptElement, vizElement);                
        </script>
             
        
   
    </body>
    </html>
@endsection