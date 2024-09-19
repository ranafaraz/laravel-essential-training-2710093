<!DOCTYPE html>
<head>
    <title>
      HOME
    </title>
</head>
<body>
  <h1>HOME - {{ $name }}</h1>
  <p>
    @if ($name === 'RANA')
      Hello Admin
    @else
      Hello {{ $name }}
    @endif
  </p>
</body>
</html>
