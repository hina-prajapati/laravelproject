<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->date("date")->nullable();
        $table->string("myTeam")->nullable();
        $table->string("opppsitionTeam")->nullable();
        $table->string("venue")->nullable();
        $table->string("match_type")->nullable(); // For dropdown selection
        $table->string("custom_match_type")->nullable(); // For custom input
        $table->string("select_role")->nullable();
        $table->string("match_result")->nullable();
        $table->string("batting_pos")->nullable();
        $table->integer("runs")->nullable();
        $table->integer("tbs")->nullable();
        $table->integer("no4s")->nullable();
        $table->integer("no6s")->nullable();
        // $table->integer("overs_bowled")->nullable();
        $table->float("overs_bowled", 8, 2)->nullable();
        $table->integer("runGiven")->nullable();
        $table->integer("extras")->nullable();
        $table->integer("nomo")->nullable();
        $table->integer("wicket_taken")->nullable();
        $table->integer("norsif")->nullable();
        $table->integer("noc")->nullable();
        $table->integer("norouts")->nullable();
        $table->integer("nostump")->nullable();

        $table->string("rgbmis")->nullable();
        $table->string("cmissed")->nullable();
        $table->string("stump_missed")->nullable();
        $table->string("runouts")->nullable();
        $table->string("award")->nullable();
        $table->string("select1")->nullable();
        $table->string("select2")->nullable();
        $table->string("fielding_pos")->nullable();
        $table->text("cover")->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
