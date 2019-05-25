<?php
$data = [
    'name' => 'Ahmad Dwi Nugroho',
    'address' => 'Tuban, Jawa Timur',
    'hobbies' => ['main game', 'main drum', 'membuat website'],
    'is_married' => false,
    'school' => [['highSchool' => 'SMKN Jatirogo', 'university' => null]],
    'skills' => [
      ['name'=> 'php',
      'score' => '90',
      ],
      [
        'name' => 'html',
        'score' => '95',
      ]
      ,
      [
        'name' => 'css',
        'score' => '95',
      ]
    ]
];


function returnjson($data)
{
    return json_encode($data);
}

echo returnjson($data);

?>
