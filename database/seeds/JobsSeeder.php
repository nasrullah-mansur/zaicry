<?php

use App\Jobs;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::create([
            'title' => 'Front End Designer',
            'content' => 'Rich and Williamson Traders',
            'description' => '<div>UX, Reaserch Velit at sit nulla viverra faucibus id arcu. Vestibulum tempor, nec nisi egestas</div>',
            'company_name' => 'Bender Garcia Plc',
            'company_about' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'photo_id' => 26,
            'company_vision' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'vacancy' => '58',
            'job_type' => 'Foley and May Co',
            'salary' => '40',
            'experience' => '22',
            'location' => 'Bowen and Rodriguez Co',
            'deadline' => '2016-03-23',
            'looking_for' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo. Eget bibendum vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.<br><br></div><div>Auctor sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non, interdum non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum. Aliquam, enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque.<br><br></div>',
            'requirement_skill' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit pellentesque praesent massa vivamus. Ac,</li><li>Nunc, cursus varius id sit posuere ullamcorper fermentum aliquam amet.</li><li>Venenatis, id turpis leo mattis et ipsum interdum.</li><li>Sagittis ultricies interdum nec quis quam.</li><li>Bibendum ut aliquet non dictum risus tortor.</li><li>Tristique diam sollicitudin at sed ultrices massa.</li></ul><div><br></div>',
            'educational_qualification' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit</li></ul><div><br></div>'
        ]);
        Jobs::create([
            'title' => 'Graphics Designer',
            'content' => 'Rich and Williamson Traders',
            'description' => '<div>UX, Reaserch Velit at sit nulla viverra faucibus id arcu. Vestibulum tempor, nec nisi egestas</div>',
            'company_name' => 'Bender Garcia Plc',
            'company_about' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'photo_id' => 27,
            'company_vision' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'vacancy' => '58',
            'job_type' => 'Foley and May Co',
            'salary' => '40',
            'experience' => '22',
            'location' => 'Bowen and Rodriguez Co',
            'deadline' => '2016-03-23',
            'looking_for' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo. Eget bibendum vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.<br><br></div><div>Auctor sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non, interdum non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum. Aliquam, enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque.<br><br></div>',
            'requirement_skill' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit pellentesque praesent massa vivamus. Ac,</li><li>Nunc, cursus varius id sit posuere ullamcorper fermentum aliquam amet.</li><li>Venenatis, id turpis leo mattis et ipsum interdum.</li><li>Sagittis ultricies interdum nec quis quam.</li><li>Bibendum ut aliquet non dictum risus tortor.</li><li>Tristique diam sollicitudin at sed ultrices massa.</li></ul><div><br></div>',
            'educational_qualification' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit</li></ul><div><br></div>'
        ]);
        Jobs::create([
            'title' => 'UI/UX Designer',
            'content' => 'Rich and Williamson Traders',
            'description' => '<div>UX, Reaserch Velit at sit nulla viverra faucibus id arcu. Vestibulum tempor, nec nisi egestas</div>',
            'company_name' => 'Bender Garcia Plc',
            'company_about' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'photo_id' => 27,
            'company_vision' => '<ul><li>Lorem ipsum : dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo.</li><li>Eget bibendum : vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.</li><li>Auctor : sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non,</li><li>Interdum : non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum.</li><li>Aliquam : enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque</li></ul><div><br></div>',
            'vacancy' => '58',
            'job_type' => 'Foley and May Co',
            'salary' => '40',
            'experience' => '22',
            'location' => 'Bowen and Rodriguez Co',
            'deadline' => '2016-03-23',
            'looking_for' => '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ipsum leo ut eget cras sem amet justo. Eget bibendum vitae felis enim, elementum. Sagittis consectetur sit eu purus, habitasse mi pulvinar ultricies a.<br><br></div><div>Auctor sed orci viverra fringilla auctor quis. Egestas nibh magna mi, est urna non, interdum non mattis. Suspendisse ultrices suspendisse nisl, tempor viverra ipsum. Aliquam, enim facilisi quis sed nam id nullam et accumsan. Etiam proin massa sed sed pellentesque.<br><br></div>',
            'requirement_skill' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit pellentesque praesent massa vivamus. Ac,</li><li>Nunc, cursus varius id sit posuere ullamcorper fermentum aliquam amet.</li><li>Venenatis, id turpis leo mattis et ipsum interdum.</li><li>Sagittis ultricies interdum nec quis quam.</li><li>Bibendum ut aliquet non dictum risus tortor.</li><li>Tristique diam sollicitudin at sed ultrices massa.</li></ul><div><br></div>',
            'educational_qualification' => '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, sed ultricies et sit.</li><li>Volutpat porta tellus turpis odio ac morbi facilisi. Leo et turpis egestas ut porttitor</li><li>rhoncus sem pretium tellus. Nisi mauris pellentesque feugiat interdum. Velit</li></ul><div><br></div>'
        ]);
    }
}
