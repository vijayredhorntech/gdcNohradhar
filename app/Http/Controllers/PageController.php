<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faculty( $type)
    {
        if ($type === 'teaching') {
            $title = 'TEACHING FACULTY';
            $tableHeader = ['Department', 'Teacher Name'];
            $tableData = [
                ['Deptt. of Pol. Science', 'Asst Prof. Ved Prakash',],
                ['Deptt. of History', 'Asst Prof. Diwan Chand',],
                ['Deptt. of Hindi', 'Vacant',],
                ['Deptt. of English', 'Asst Prof. Dharam Devi',],
                ['Deptt. of Commerce', 'Asst Prof. Kartik Thakur, Asst Prof. Thakurender Negi',],
                ['Deptt. of Economics', 'Asst Prof Anukul Kaith',],

            ];
        }
        elseif($type ==='non_teaching'){
            $title = 'NON-TEACHING FACULTY';
            $tableHeader = ['Name of Post', 'Name'];
            $tableData = [
                ['Office Supdt. G-II', 'Vacant',],
                ['Senior Asst', 'Vacant',],
                ['Clerk', 'Sh. Virender Singh',],
                ['JOA (IT)', 'Vacant',],
                ['Peon', 'Sh. Ami Chand',],
                ['Peon', 'Sh. Kuldeep Singh',],
                ['Peon', 'Sh. Bhim Singh',],
            ];
        }


        return view('faculty', compact('title', 'tableHeader', 'tableData'));
    }


    public function committee( $type)
    {
        if ($type === 'admission_commitee') {
            $title = 'ADMISSION COMMITTEE';
            $tableHeader = ['Name', 'Members'];
            $tableData = [
                ['Admission Committee for all UG Classes',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Kartik Thakur',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],
                ['Prospectus Committee',
                    [
                        'Ass Prof. Ved Prakash',
                        'Asst Prof Diwan Chand (Convener)',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Kartik Thakur',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],

            ];
        }
        elseif($type ==='administrative_committee'){
            $title = 'ADMINISTRATIVE COMMITTEE';
            $tableHeader = ['Name', 'Members'];
            $tableData = [
                ['Advisory Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                    ],
                ],
                ['Career Counseling & Guidance Cell',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                    ],
                ],
                ['Discipline Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                    ],
                ],
                ['Local Purchase Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Anukul Kaith',
                    ],
                ],
                ['CSCA Advisory Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Anukul Kaith',
                    ],
                ],
                ['Time Table Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Kartik Thakur',
                    ],
                ],
                ['Scholarship Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Kartik Thakur',
                    ],
                ],
                ['Seminars & Conferences',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                    ],
                ],
                ['Library Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Sh. Vijay Kumar',
                    ],
                ],
                ['Anti-Ragging Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],
                ['House Exams Committee',
                    [
                        'Ass Prof. Ved Prakash (Convener)',
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Kartik Thakur',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],
                ['Eco Club',
                    [
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],
                ['Red Ribbon Club',
                    [
                        'Asst. Prof Dharam Devi',
                    ],
                ],
                [
                    'College Magazine Committee',
                    [
                        'Asst Prof Diwan Chand (Convener)',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Kartik Thakur',
                        'Asst. Prof Thakurender Negi',
                    ],
                ],
                [
                    'Sanitation Committee',
                    [
                        'Asst Prof Diwan Chand',
                        'Asst. Prof Anukul Kaith',
                        'Asst. Prof Kartik Thakur',
                    ],
                ],
                [
                    'Building and Campus Development',
                       [
                           'Ass Prof. Diwan Chand (Convener)',
                           'Asst. Prof Thakurender Negi',
                           'Asst. Prof Dharam Devi'
                       ]
                ],
                [
                    'Website/ICT Committee',
                       [
                           'Ass Prof. Diwan Chand (Convener)',
                           'Asst. Prof Kartik Thakur',
                           'Asst. Prof Thakurender Negi'
                       ]
                ],
                [
                    'Cultural Committee',
                       [
                           'Asst. Prof Dharam Devi(Convener)',
                           'Asst. Prof Anukul Kaith',
                           'Asst. Prof Kartik Thakur',
                           'Asst. Prof Thakurender Negi'
                       ]
                ],
                [
                    'Rovers and Rangers Committee',
                    [
                        'Asst. Prof Dharam Devi (Ranger)',
                        'Asst. Prof Thakurender Negi (Rover)'
                    ]
                ],
                [
                    'Anti-Sexual Harassment & Women Grievances Cell',
                    [
                        'Asst. Prof. Diwan Chand (Convener)',
                        'Asst. Prof. Dharam Devi',
                        'Asst. Prof. Anukul Kaith'
                    ]
                ],
                [
                    'RUSA Cell/ IQAC',
                    [
                        'Asst Prof Diwan Chand (Co-ordinator)',
                        'Asst. Prof Kartik Thakur'
                    ]
                ],
                [
                    'UGC Committee',
                    [
                        'Asst Prof. Ved Prakash (Convener)',
                        'Asst Prof. Diwan Chand'
                    ]
                ],
                [
                    'Sports Committee',
                    [
                        'Asst. Prof Diwan Chand',
                        'Asst. Prof Thakurender Negi',
                        'Asst. Prof Anukul Kaith'
                    ]
                ],
                [
                    'Record Maintenance Committee',
                    [
                        'Asst Prof Diwan Chand (Convener)',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Kartik Thakur',
                        'Sh. Virender Singh (Clerk)'
                    ]
                ],
                [
                    'Press & Photography Committee',
                    [
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Kartik Thakur'
                    ]
                ],
                [
                    'Bursar',
                    [
                        'Asst Prof. Diwan Chand',
                    ]
                ],
                [
                    'OSA Formation & Management Committee',
                    [
                        'Asst Prof Diwan Chand (Convener)',
                        'Asst. Prof Dharam Devi',
                        'Asst. Prof Anukul Kaith'
                    ]
                ],
                [
                    "First Aid/Medical Aid Committee",
                    [
                        "Asst Prof Diwan Chand (Convener)",
                        "Asst. Prof Dharam Devi"
                    ]
                ],
                [
                    "Road Safety Club",
                    [
                        "Asst. Prof Anukul Kaith"
                    ]
                ],
                [
                    'Attestation Committee',
                    [
                        'All Teachers of DSE-I'
                    ]
                ],
                [
                    "University Affairs Committee",
                    [
                        "Asst Prof Diwan Chand (Convener)",
                        "Asst. Prof Dharam Devi",
                        "Asst. Prof Anukul Kaith",
                        "Asst. Prof Kartik Thakur",
                        "Asst. Prof Thakurender Negi",
                        "Sh. Virender Singh (Clerk)"
                    ]
                ]
            ];
        }


        return view('committee', compact('title', 'tableHeader', 'tableData'));
    }
}
