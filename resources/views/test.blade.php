<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

	<script src="{{ asset('js/app.js') }}"></script>
	

	
    <title>MBK</title>
	
	<style>
        .content {
            /* width:30vw;   */
        }
        .content,.img-,.text-,.title,.body,.link{
            border: 1px solid black;
            padding:5px;
            margin:2px;
        }
        .img- img{
            width:200px;
        }
        .text- {
            height:400px;
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }
        
    </style>

	
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="content">
                    <div class="img-">
                        <img src="{{ asset('images/student-protection.png') }}" class="img-fluid d-block m-auto">
                    </div>
                    <div class="text-">
                        <p class="title">title</p>
                        <div class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima voluptatum illo quibusdam reprehenderit minus repellendus dolore eveniet, officiis earum vel deserunt maiores necessitatibus, labore tenetur voluptas hic nisi repellat!</div>
                        <div class="link">view</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="content">
                    <div class="img-">
                        <img src="{{ asset('images/student-protection.png') }}" class="img-fluid d-block m-auto">
                    </div>
                    <div class="text-">
                        <p class="title">title</p>
                        <div class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima officiis earum vel deserunt maiores necessitatibus, labore tenetur voluptas hic nisi repellat!</div>
                        <div class="link">view</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
	
</body>
</html>