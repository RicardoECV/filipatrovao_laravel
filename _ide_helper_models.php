<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title_1
 * @property string $sub_title_2
 * @property string $sub_title_3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereSubTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereSubTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereSubTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Aboutme whereUpdatedAt($value)
 */
	class Aboutme extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activities whereUpdatedAt($value)
 */
	class Activities extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $logo_email
 * @property string $email
 * @property string $logo_linkdin
 * @property string $linkdin
 * @property string $logo_x
 * @property string $link_x
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $cv_link
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereCvLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereLinkX($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereLinkdin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereLogoEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereLogoLinkdin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereLogoX($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contacts whereUpdatedAt($value)
 */
	class Contacts extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $text
 * @property string $img
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Expertises whereUpdatedAt($value)
 */
	class Expertises extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $header
 * @property string $header_sub_title
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $editor_id
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereEditorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereHeaderSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Homepage whereUpdatedAt($value)
 */
	class Homepage extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $link
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Multimediacontent whereUpdatedAt($value)
 */
	class Multimediacontent extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $title_logo
 * @property string $text
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereTitleLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Myjourneys whereUpdatedAt($value)
 */
	class Myjourneys extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Personalinterests whereUpdatedAt($value)
 */
	class Personalinterests extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property string|null $img
 * @property string $title_logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereTitleLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Projects whereUpdatedAt($value)
 */
	class Projects extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $text
 * @property string $link
 * @property string $button_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereButtonLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Publications whereUpdatedAt($value)
 */
	class Publications extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title_1
 * @property string $sub_title_2
 * @property string $sub_title_3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereSubTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereSubTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereSubTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Research whereUpdatedAt($value)
 */
	class Research extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title_1
 * @property string $sub_title_2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereSubTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereSubTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicomm whereUpdatedAt($value)
 */
	class Scicomm extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Scicommcards whereUpdatedAt($value)
 */
	class Scicommcards extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skills whereUpdatedAt($value)
 */
	class Skills extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $real_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

