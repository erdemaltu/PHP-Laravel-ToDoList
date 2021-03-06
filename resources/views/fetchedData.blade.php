<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style> 
            #login{
                width: 50%;
                margin: 20px auto;
                display: flex;
                flex-direction: column;
                text-align: center;
                background:green;
            }
            #register{
                width: 50%;
                margin: 20px auto;
                display: flex;
                flex-direction: column;
                text-align: center;
                background:black;
            }
            #body{
                width: 80%;
                margin: 20px auto;
                display: flex;
                flex-direction: column;
                text-align: center;
                background: #0099b4; 
                background: -webkit-linear-gradient(
                to right,
                #00b7ff,
                #004ba0
                ); 
                background: linear-gradient(
                to right,
                #00c3ff,
                #006a7c
                ); 
            
                min-height: 90vh;
                border-radius: 10px;
            }
            #list{
                text-align: center;
                margin-top: 30px;
                font-size: 25px;
                display: flex;
                justify-content: center
            }
            #data{
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 4px auto;
                color: #fff;
                background: #f3022a;
                padding: 16px;
                border-radius: 5px;
                width: 60%;
            }
            #search{
                position: absolute;
            }
            #add {
                border: none;
                border-radius: 4px;
                font-size: 21px;
                width: 70px;
                cursor: pointer;
                outline: none;
                background: #f3022a;
                color: #fff;
                text-transform: capitalize;
        }
        </style>
    </head>
    <body>
        @if(Route::has('login'))
            @auth
                @if(Auth::user()->utype === 'admin')
                    <nav class="navbar navbar-dark bg-dark">
                        <a class="btn btn-sm btn-outline-secondary" type="button">{{Auth::user()->name}}</a>
                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                            @csrf
                        </form>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">????k????</a>
                    </nav>
                    <div id="body" class="container">
                        <form method="GET" action="">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <input type="text" name="name" value="{{request()->get('name')}}" placeholder="Kullan??c?? Ad??" class="form-control">
                                </div>
                                @if(request()->get('name'))
                                <div class="col-md-2">
                                    <a href="{{route('home')}}" class="btn btn-secondary">S??f??rla</a>
                                </div>
                                @endif
                            </div>
                        </form>
                        <table id="list" class="table">
                            <tr>
                                <th>Kullan??c?? ??simleri</th>
                                <th>Al????veri?? Listeleri</th>
                            </tr>
                            @foreach($UserTodo as $usertodo)
                                <tr>
                                    <td id="data">{{$usertodo->name}}</td>
                                    <td><a class="btn btn-warning" href="{{route('user.todo',$usertodo->id)}}">Liste</i></a>
                                </tr>
                            @endforeach
                        </table>
                        {{$UserTodo->withQueryString()->links()}}
                    </div>
                @else
                    <nav class="navbar navbar-dark bg-dark">
                        <a class="btn btn-sm btn-outline-secondary" type="button">{{Auth::user()->name}}</a>
                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                            @csrf
                        </form>
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">????k????</a>
                    </nav>
                    @if($TodoArr->count()>0)
                        <div id="body" class="container">
                            <div class="text-right">
                                <a id="add" class="btn btn-success" href="create">Ekle</a>
                            </div>
                            <form method="GET" action="">
                                <div class="form-row">
                                    <div class="col-md-2">
                                        <input id="search" type="text" name="name" value="{{request()->get('name')}}" placeholder="??r??n Ad??" class="form-control">
                                    </div>
                                    @if(request()->get('name'))
                                    <div class="col-md-2">
                                        <a href="{{route('home')}}" class="btn btn-secondary">S??f??rla</a>
                                    </div>
                                    @endif
                                </div>
                            </form>
                            
                            <table id="list" class="table">
                                <tr>
                                    <th>Al????veri?? Listesi</th>
                                    <th>????lemler</th>
                                </tr>
                                @foreach($TodoArr as $todo)
                                    <tr>
                                        <td id="data">{{$todo->name}}</td>
                                        <td><a class="btn btn-success" href="edit/{{$todo->id}}">D??zenle</i></a> <a class="btn btn-danger" href="delete/{{$todo->id}}">Sil</a></td>
                                    </tr>
                                @endforeach
                            </table>
                            {{$TodoArr->withQueryString()->links()}}
                        </div>
                    @else
                    <div id="body" class="container">
                        <div class="text-right">
                            <a id="add" class="btn btn-success" href="create">Ekle</a>
                        </div>
                        <div>
                            <h2>Al????veri?? Listenizde kay??t bulunamam????t??r</h2>
                        </div>
                    </div>
                    @endif
                @endif
            @else
                <div class="container">
                    <a id="login" class="btn btn-sm btn-outline-danger" href="{{route('login')}}"><h2>Giri?? Yap</h2></a>
                    <a id="register" class="btn btn-sm btn-outline-danger" href="{{route('register')}}"><h2>Kay??t Ol</h2></a>
                </div>
            @endif
        @endif
    </body>
</html>