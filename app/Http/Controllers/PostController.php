<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    // public function index()
    // {

    //     $posts = Post::all();
    //     return view('index')->with('posts', $posts);
    // }

    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Retrieve posts associated with the authenticated user
        $posts = Post::where('user_id', $userId)->get();

        return view('main.all-matches')->with('posts', $posts);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $rules = [
            'date' => 'required|date',
            'myTeam' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'opppsitionTeam' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'venue' => 'required|string|max:255',
            'match_type' => 'required|string|max:255',
            'select_role' => 'required|string|max:255',
            'match_result' => 'required|string|max:255',
            'batting_pos' => 'required|string|max:255',
            'runs' => 'required|integer',
            // 'custom_match_type' => 'nullable|required',
            'tbs' => 'required|integer',
            'no4s' => 'required|integer',
            'tournament' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'type_ball' => 'required',
            'no6s' => 'required|integer',
            'overs_bowled' => 'required|numeric',
            'runGiven' => 'required|integer',
            'extras' => 'required|integer',
            'nomo' => 'required|integer',
            'wicket_taken' => 'required|numeric',
            'norsif' => 'required|integer',
            'noc' => 'required|integer|max:10',
            'norouts' => 'required|integer|max:10',
            'nostump' => 'required|integer|max:10',
            'rgbmis' => 'required|string|max:255',
            'cmissed' => 'required|string|max:255',
            'stump_missed' => 'required|string|max:255',
            'runouts' => 'required|string|max:255',
            'award' => 'required|string|max:255',
            'select1' => 'required|string|max:255',
            // 'select2' => 'required|string|max:255',
            'fielding_pos' => 'required|string|max:255',
            // 'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image in the array
        ];

        $customMessages = [
            'norouts.required' => 'The Number Of Runs Outs field is required',
            'norouts' => 'Number Of Runs Outs cannot be more than 10',
            'noc.required' => 'Number Of Catches field is required',
            'noc' => 'Number Of Catches cannot be more than 10',
            'nostump.required' => 'Number Of stumpings field is required',
            'nostump' => 'Number Of stumpings cannot be more than 10',

            'tbs.required' => 'Total Ball Faced field is required',
            'batting_pos.required' => 'Batting Position field is required',
            'nomo.required' => 'Number Of Maidan Overs field is required',
            'fielding_pos.required' => 'Fielding Position field is required',
            'norsif.required' => 'Number of Run Saved in Fielding field is required',
            'rgbmis.required' => 'Runs Given by misfiled fiedd is required',
            'cmissed.required' => 'Catches Missed field is required',
            'stump_missed' => 'Stumpings Missed field is required',
            'runouts' => 'Run-Out Missed filed is required',
            'myTeam.regex' => 'Only letters are allowed in the myTeam field.',
            'opppsitionTeam.regex' => 'Only letters are allowed in the myTeam field.',
            'venue.regex' => 'Only letters are allowed in the myTeam field.',
            'tournament.regex' => 'Only letters are allowed in the myTeam field',
            //  'match_type.required_without' => 'Please select a match type or provide a custom match type.',
            //  'custom_match_type.required_without' => 'Please select a match type or provide a custom match type.',
        ];

        // Custom validation rule to ensure at least one of the fields is filled
        Validator::extend('one_filled', function ($attribute, $value, $parameters, $validator) {
            $matchType = $validator->getData()['match_type'];
            $customMatchType = $validator->getData()['custom_match_type'];

            // Check if at least one of the fields is filled
            return !empty($matchType) || !empty($customMatchType);
        });

        $messages = [
            'one_filled' => 'Please select a match type or enter a custom match type.',
        ];

        // Check if the batting position is "DNB"
        if ($request->input('batting_pos') === 'DNB') {
            // If batting position is "DNB", make the runs and tbs fields nullable
            $rules['runs'] = 'nullable';
            $rules['tbs'] = 'nullable';
            $rules['no4s'] = 'nullable';
            $rules['no6s'] = 'nullable';
            $rules['select1'] = 'nullable';
            $rules['select2'] = 'nullable';

        } else {
            // If batting position is not "DNB", make the runs and tbs fields required
            $rules['runs'] = 'required';
            $rules['tbs'] = 'required';
            $rules['no4s'] = 'required';
            $rules['no6s'] = 'required';
            $rules['select1'] = 'required';
            // $rules['select2'] = 'required';
        }

        // Check if the batting position is "DNB"
        if ($request->input('overs_bowled') === '0') {
            // If Overs Bowled   is "0", make the runs and tbs fields nullable
            $rules['runGiven'] = 'nullable';
            $rules['extras'] = 'nullable';
            $rules['nomo'] = 'nullable';
            $rules['wicket_taken'] = 'nullable';
        } else {
            $rules['runGiven'] = 'required';
            $rules['extras'] = 'required';
            $rules['nomo'] = 'required';
            $rules['wicket_taken'] = 'required';
        }

        // $oversBowled = $request->input('overs_bowled');
        // $integerPart = floor($oversBowled);
        // $decimalPart = $oversBowled - $integerPart;
        // $oversBowled = $request->input('overs_bowled');
        // $integerPart = floor($oversBowled);
        // $decimalPart = $oversBowled - $integerPart;
        // if ($integerPart == 0) {
        //     $maxWicketsAllowed = ceil($decimalPart * 10);
        // }
        // elseif ($integerPart == 1) {
        //     $maxWicketsAllowed = 6;
        //     $rules['wicket_taken'] = 'required|numeric|max:6';
        // }
        // else {
        //     $maxWicketsAllowed = 10;
        // }
        // if ($maxWicketsAllowed < 10) {
        //     $rules['wicket_taken'] = 'nullable|required|numeric|max:' . $maxWicketsAllowed;
        // }
        // $rules['wicket_taken'] = [
        //     'required',
        //     'numeric',
        //     "max:$maxWicketsAllowed", // Set maximum value dynamically
        // ];

        $request->validate($rules, $customMessages, $messages);

        // if ($request->hasFile("cover")) {
        //     $file = $request->file("cover");
        //     $imageName = time() . '_' . $file->getClientOriginalName();
        //     $file->move(\public_path("cover/"), $imageName);

        // Get the selected value from the dropdown
        $selectedMatchType = $request->input('match_type');

        // Get the custom typed value from the input field
        $customMatchType = $request->input('custom_match_type');

        // Use the selected value if it's not empty; otherwise, use the custom typed value
        if (!empty($selectedMatchType)) {
            $matchType = $selectedMatchType;
        } else {
            $matchType = null; // Set to null when a custom value is typed
        }

        // Retrieve the input values
        $nomo = $request->input('nomo');
        $overs_bowled = $request->input('overs_bowled');

        if ($nomo > $overs_bowled) {
            return back()->withInput()->withErrors(['nomo' => 'Number Of Maidan Overs cannot be more than Overs Bowled.']);
        }

        if ($nomo == $overs_bowled) {

        }

        $role = $request->input('select_role');
        $match_result = $request->input('match_result');
        $no4s = $request->no4s;
        $no6s = $request->no6s;
        $runs = ($no4s * 4) + ($no6s * 6);

        if ($runs > $request->runs) {
            return redirect()->back()->withInput()->withErrors(['runs' => 'The total number of 4s and 6s cannot exceed total runs.']);
        }

        // Retrieve the validated data
        $runs = $request->input('runs');
        $tbs = $request->input('tbs');

        // Check if "tbs" is 0 and "runs" is more than 7
        if ($tbs == 0 && $runs > 6) {
            // Handle the case where the validation rule is violated
            return redirect()->back()->withInput()->withErrors(['tbs' => 'If Total Balls is 0, Runs cannot be more than 6.']);
        }

        $runGiven = $request->input('runGiven');
        $extras = $request->input('extras');
        // Check if extras exceed or equal runs
        if ($extras <= $runGiven) {
            // Continue with your logic if validation passes
        } else {
            // Redirect back with input and error message
            return redirect()->back()->withInput()->withErrors(['extras' => 'Extras cannot exceed total Runs Given.']);
        }

        $post = new Post([

            "date" => $request->date,
            "myTeam" => $request->myTeam,
            "opppsitionTeam" => $request->opppsitionTeam,
            "venue" => $request->venue,
            "match_type" => $matchType, // Use $matchType here
            "custom_match_type" => $customMatchType, // Always store the custom value
            "select_role" => $role,
            "tournament" => $request->tournament,
            "type_ball" => $request->type_ball,
            "match_result" => $match_result,
            "batting_pos" => $request->batting_pos,
            "runs" => $runs,
            "tbs" => $tbs,
            "no4s" => $no4s,
            "no6s" => $no6s,
            "overs_bowled" => $overs_bowled,
            "runGiven" => $request->runGiven,
            "extras" => $request->extras,
            "nomo" => $nomo,
            "wicket_taken" => $request->wicket_taken,
            "norsif" => $request->norsif,
            "noc" => $request->noc,
            "norouts" => $request->norouts,
            "nostump" => $request->nostump,
            "rgbmis" => $request->rgbmis,
            "cmissed" => $request->cmissed,
            "stump_missed" => $request->stump_missed,
            "runouts" => $request->runouts,
            "award" => $request->award,
            "select1" => $request->select1,
            "select2" => $request->select2,
            "fielding_pos" => $request->fielding_pos,
            // "cover" => $imageName,
        ]);
        $post->user_id = Auth::id();
        // dd($post);
        $post->save();

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['post_id'] = $post->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());

            }
        }

        return redirect("/all-matches");
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        // Define the ball types array
        $ballTypes = ['Leather Ball', 'Tennis Ball', 'Rubber Ball'];
        // Define the array of roles in your controller
        $roles = ['Captain', 'Vice-Captain', 'Player'];

        // Define the array of batting positions
        $battingPositions = array_merge(range(1, 10), ['DNB']);

        // Define the array of fielding positions
        $fieldingPositions = [
            'Wicket Keeper',
            'Slip',
            'Long On',
            'Long Off',
            'Mid On',
            'Mid Off',
            'Cover',
            'Point',
            'Silly Point',
            'Third Man',
            'Deep Third Man',
        ];

        // Pass both $posts and $ballTypes to the view
        return view('main.edit-match', ['posts' => $posts, 'ballTypes' => $ballTypes, 'roles' => $roles,
            'battingPositions' => $battingPositions, 'fieldingPositions' => $fieldingPositions]);
    }

    public function update(Request $request, $id)
    {

        $rules = [
            'date' => 'required|date',
            'myTeam' => 'required|string|max:255',
            'opppsitionTeam' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'match_type' => 'required|string|max:255',
            'select_role' => 'required|string|max:255',
            'match_type' => 'required|string|max:255',
            // 'match_type' => 'required_without:custom_match_type|string|max:255', // Either 'match_type' or 'custom_match_type' is required
            // 'custom_match_type' => 'required_without:match_type|string|max:255', // Either 'match_type' or 'custom_match_type' is required
            'match_result' => 'required|string|max:255',
            'batting_pos' => 'required|string|max:255',
            'runs' => 'required|integer',
            // 'custom_match_type' => 'required',
            'tbs' => 'required|integer',
            'no4s' => 'required|integer',
            'tournament' => 'required',
            'type_ball' => 'required',
            'no6s' => 'required|integer',
            'overs_bowled' => 'required|numeric',
            'runGiven' => 'required|integer',
            'extras' => 'required|integer',
            'nomo' => 'required|integer',
            'wicket_taken' => 'required|numeric|max:10',
            'norsif' => 'required|integer',
            'noc' => 'required|integer|max:10',
            'norouts' => 'required|integer|max:10',
            'nostump' => 'required|integer|max:10',
            'rgbmis' => 'required|string|max:255',
            'cmissed' => 'required|string|max:255',
            'stump_missed' => 'required|string|max:255',
            'runouts' => 'required|string|max:255',
            'award' => 'required|string|max:255',
            'select1' => 'required|string|max:255',
            // 'select2' => 'required|string|max:255',
            'fielding_pos' => 'required|string|max:255',
            // 'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image in the array
        ];
        $post = Post::findOrFail($id);
        $customMessages = [
            'norouts.required' => 'The Number Of Runs Outs field is required',
            'norouts' => 'Number Of Runs Outs cannot be more than 10',
            'noc.required' => 'Number Of Catches field is required',
            'noc' => 'Number Of Catches cannot be more than 10',
            'nostump.required' => 'Number Of stumpings field is required',
            'nostump' => 'Number Of stumpings cannot be more than 10',
            'wicket_taken' => 'Wickte Taken field is required',
            'wicket_taken' => 'Wickte Taken cannot be more than 10 ',
            'tbs.required' => 'Total Ball Faced field is required',
            'batting_pos.required' => 'Batting Position field is required',
            'nomo.required' => 'Number Of Maidan Overs field is required',
            'fielding_pos.required' => 'Fielding Position field is required',
            'norsif.required' => 'Number of Run Saved in Fielding field is required',
            'rgbmis.required' => 'Runs Given by misfiled fiedd is required',
            'cmissed.required' => 'Catches Missed field is required',
            'stump_missed' => 'Stumpings Missed field is required',
            'runouts' => 'Run-Out Missed filed is required',
            //  'match_type.required_without' => 'Please select a match type or provide a custom match type.',
            //  'custom_match_type.required_without' => 'Please select a match type or provide a custom match type.',
        ];

        $role = $request->input('select_role');
        $match_result = $request->input('match_result');

        $selectedMatchType = $request->input('match_type');

        // Get the custom typed value from the input field
        $customMatchType = $request->input('custom_match_type');

        // Use the selected value if it's not empty; otherwise, use the custom typed value
        if (!empty($selectedMatchType)) {
            $matchType = $selectedMatchType;
        } else {
            $matchType = null; // Set to null when a custom value is typed
        }

        $no4s = $request->no4s;
        $no6s = $request->no6s;
        $runs = ($no4s * 4) + ($no6s * 6);

        if ($runs > $request->runs) {
            return redirect()->back()->withInput()->withErrors(['runs' => 'The total number of 4s and 6s cannot exceed total runs.']);
        }

        // Retrieve the validated data
        $runs = $request->input('runs');
        $tbs = $request->input('tbs');

        // Check if "tbs" is 0 and "runs" is more than 7
        if ($tbs == 0 && $runs > 6) {
            // Handle the case where the validation rule is violated
            return redirect()->back()->withInput()->withErrors(['tbs' => 'If Total Balls is 0, Runs cannot be more than 6.']);
        }

        // Retrieve the input values
        $nomo = $request->input('nomo');
        $overs_bowled = $request->input('overs_bowled');
        if ($nomo > $overs_bowled) {
            return back()->withInput()->withErrors(['nomo' => 'Number Of Maidan Overs cannot be more than Overs Bowled.']);
        }

        if ($nomo == $overs_bowled) {

        }

        $runGiven = $request->input('runGiven');
        $extras = $request->input('extras');
        if ($extras <= $runGiven) {
        } else {
            return redirect()->back()->withInput()->withErrors(['extras' => 'Extras cannot exceed total Runs Given.']);
        }

        // Check if the batting position is "DNB"
        if ($request->input('batting_pos') === 'DNB') {
            // If batting position is "DNB", make the runs and tbs fields nullable
            $rules['runs'] = 'nullable';
            $rules['tbs'] = 'nullable';
            $rules['no4s'] = 'nullable';
            $rules['no6s'] = 'nullable';
            $rules['select1'] = 'nullable';
            $rules['select2'] = 'nullable';

        } else {
            // If batting position is not "DNB", make the runs and tbs fields required
            $rules['runs'] = 'required';
            $rules['tbs'] = 'required';
            $rules['no4s'] = 'required';
            $rules['no6s'] = 'required';
            $rules['select1'] = 'required';
            // $rules['select2'] = 'required';
        }

        // Check if the batting position is "DNB"
        if ($request->input('overs_bowled') === '0') {
            // If Overs Bowled   is "0", make the runs and tbs fields nullable
            $rules['runGiven'] = 'nullable';
            $rules['extras'] = 'nullable';
            $rules['nomo'] = 'nullable';
            $rules['wicket_taken'] = 'nullable';
        } else {
            $rules['runGiven'] = 'required';
            $rules['extras'] = 'required';
            $rules['nomo'] = 'required';
            $rules['wicket_taken'] = 'required';
        }
        // $oversBowled = $request->input('overs_bowled');
        // $integerPart = floor($oversBowled);
        // $decimalPart = $oversBowled - $integerPart;
        // $oversBowled = $request->input('overs_bowled');
        // $integerPart = floor($oversBowled);
        // $decimalPart = $oversBowled - $integerPart;
        // if ($integerPart == 0) {
        //     $maxWicketsAllowed = ceil($decimalPart * 10);
        // }
        // elseif ($integerPart == 1) {
        //     $maxWicketsAllowed = 6;
        //     $rules['wicket_taken'] = 'nullable|numeric|max:6';
        // }
        // else {
        //     $maxWicketsAllowed = 10;
        // }
        // if ($maxWicketsAllowed < 10) {
        //     $rules['wicket_taken'] = 'nullable|required|numeric|max:' . $maxWicketsAllowed;
        // }
        // $rules['wicket_taken'] = [
        //     'required',
        //     'numeric',
        //     "max:$maxWicketsAllowed", // Set maximum value dynamically
        // ];

        $request->validate($rules, $customMessages);

        // if ($request->hasFile("cover")) {
        //     if (File::exists("cover/" . $post->cover)) {
        //         File::delete("cover/" . $post->cover);
        //     }
        //     $file = $request->file("cover");
        //     $post->cover = time() . "_" . $file->getClientOriginalName();
        //     $file->move(\public_path("/cover"), $post->cover);
        //     $request['cover'] = $post->cover;
        // }

        $post->update([

            "date" => $request->date,
            "myTeam" => $request->myTeam,
            "opppsitionTeam" => $request->opppsitionTeam,
            "venue" => $request->venue,
            "match_type" => $matchType, // Use $matchType here
            "custom_match_type" => $customMatchType, // Always store the custom value
            "select_role" => $role,
            "tournament" => $request->tournament,
            "type_ball" => $request->type_ball,
            "match_result" => $match_result,
            "batting_pos" => $request->batting_pos,
            "runs" => $runs,
            "tbs" => $tbs,
            "no4s" => $no4s,
            "no6s" => $no6s,
            "overs_bowled" => $overs_bowled,
            "runGiven" => $request->runGiven,
            "extras" => $request->extras,
            "nomo" => $nomo,
            "wicket_taken" => $request->wicket_taken,
            "norsif" => $request->norsif,
            "noc" => $request->noc,
            "norouts" => $request->norouts,
            "nostump" => $request->nostump,
            "rgbmis" => $request->rgbmis,
            "cmissed" => $request->cmissed,
            "stump_missed" => $request->stump_missed,
            "runouts" => $request->runouts,
            "award" => $request->award,
            "select1" => $request->select1,
            "select2" => $request->select2,
            "fielding_pos" => $request->fielding_pos,
            // "cover" => $imageName,
            // "cover" => $post->cover,
        ]);
        //   dd($post);
        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request["post_id"] = $id;
                $request["image"] = $imageName;
                $file->move(\public_path("images"), $imageName);
                Image::create($request->all());

            }
        }

        return redirect("/all-matches");

    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        // if (File::exists("cover/" . $posts->cover)) {
        //     File::delete("cover/" . $posts->cover);
        // }
        $images = Image::where("post_id", $posts->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->image)) {
                File::delete("images/" . $image->image);
            }
        }
        $posts->delete();
        return back();
    }

    public function deleteimage($id)
    {
        $images = Image::findOrFail($id);
        if (File::exists("images/" . $images->image)) {
            File::delete("images/" . $images->image);
        }

        Image::find($id)->delete();
        return back();
    }

    // public function deletecover($id)
    // {
    //     $cover = Post::findOrFail($id)->cover;
    //     if (File::exists("cover/" . $cover)) {
    //         File::delete("cover/" . $cover);
    //     }
    //     return back();
    // }

    public function filter(Request $request)
    {

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $posts = Post::where('created_at', '>=', $start_date)
            ->where('created_at', '<=', $end_date)
            ->get();

        return view('index', compact('posts'));

    }
    public function view($id)
    {
        $posts = Post::find($id);

        // Check if the authenticated user owns the post
        if (Auth::id() === $posts->user_id) {
            return view('main.view-matches', compact('posts'));
        } else {
            // Handle unauthorized access (e.g., redirect or display an error message)
            return redirect()->route('posts.index')->with('error', 'Unauthorized access');
        }
    }

}