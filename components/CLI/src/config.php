<?php

return [
    /**
     * By default the project name is: "App"
     * But you can change it to whatever name you like.
     */
    "nameProject"=>"App",
    



    /**
     * This is where your project will be created
     */
    "raiz"=>explode("CLI", __DIR__)[0],
    



    /**
     * This is the list of folders that will be created within your project. 
     * you can add or remove
     */
    "dirs"=>[],




    /**
     *  Before creating a new command, you must add it 
     *  to the "commands" array, and to the "suggestList" array
     */
   
    "commands"=>[
        //Command
        "project"=>[
            // SubCommand
            "create"
        ],
        "cmd"=>[
            "create"
        ]
    ], 




    /**
     * Command suggestion list
     */
    "suggestList"=>[
        "project",
        "cmd"
    ],
];