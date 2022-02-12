<!DOCTYPE html>
<html>
<head>
    <title>mw10.com.br</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    @foreach ($fields as $field )
    
        <p>
            <b>{{$field->label}}: </b>  @foreach($details['fields'] as $key => $field_value)   {{ ($field->label == $key) ? $field_value : '' }} @endforeach <br/>  
        </p>

    @endforeach
    <hr>
    <p>Thank you</p>
</body>
</html>