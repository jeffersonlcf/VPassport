<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\OrganisationType;

class CreateOrganisationTypesTable extends Migration
{
    private $top_cats = [
        1 => 'advocacy, law, politics',
        2 => 'arts, culture, media',
        3 => 'education, research',
        4 => 'environment',
        5 => 'health',
        6 => 'international',
        7 => 'local development, housing',
        8 => 'philanthropy, voluntarism',
        9 => 'professional, vocational',
        10 => 'recreation, sports',
        11 => 'religion',
        12 => 'social services',
    ];

    private $sub_cats = [
        'addiction support' => 5,
        'adult and continuing education' => 3,
        'advocacy' => 1,
        'agricultural fairs' => 10,
        'animal welfare' => 4,
        'arts' => 2,
        'chambers of commerce' => 9,
        'civil and human rights' => 1,
        'diocesan, parishes' => 11,
        'education support' => 3,
        'emergency relief services' => 12,
        'environmental enhancement' => 4,
        'environmental sustainability' => 4,
        'family support services' => 12,
        'fund-raising' => 8,
        'group water schemes' => 4,
        'health services and health promotion' => 5,
        'heritage and visitor attractions' => 2,
        'homelessness services' => 12,
        'hospices' => 5,
        'hospitals' => 5,
        'international affiliation' => 6,
        'international development' => 6,
        'job creation' => 7,
        'legal services' => 1,
        'local development' => 7,
        'media, film' => 2,
        'mental health services' => 5,
        'museums and libraries' => 2,
        'philanthropy' => 8,
        'places of worship' => 11,
        'politics' => 1,
        'pre-primary education' => 3,
        'pre-school childcare' => 12,
        'primary education' => 3,
        'professional or sector representative bodies' => 9,
        'recreational clubs, societies' => 10,
        'religious associations' => 11,
        'research' => 3,
        'residential care centres' => 5,
        'residential mental health services' => 5,
        'secondary education' => 3,
        'services for older people' => 12,
        'services for people with disabilities' => 12,
        'services for travellers and ethnic minorities' => 12,
        'sheltered housing' => 7,
        'social enterprise' => 7,
        'social housing' => 7,
        'sports organisations' => 10,
        'third-level education' => 3,
        'trade unions, employer organisations' => 9,
        'unclassified charities' => 12,
        'vocational and technical education' => 3,
        'voluntarism' => 8,
        'youth services' => 12,
    ];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisation_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            // Define one to many hierarchy on org types
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('organisation_types')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });

        $top_cat_map = [];
        foreach($this->top_cats as $key => $title) {
            $type = OrganisationType::create([
                'title' => $title,
            ]);
            $top_cat_map[$key] = $type->id;
        }

        foreach($this->sub_cats as $title => $parent) {
            OrganisationType::create([
                'title' => $title,
                'parent_id' => $top_cat_map[$parent],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisation_types');
    }
}
