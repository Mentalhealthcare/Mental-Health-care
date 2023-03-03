<?php

namespace wpforo\modules\follows\classes;

class Template {
	public function __construct() {
		$this->init_hooks();
	}

	private function init_hooks() {
        if( wpforo_setting('subscriptions', 'user_following_notify') ){
            add_action( 'wpforo_template_profile_action_buttons_left', function( $user ){ echo $this->button( $user ); } );
        }
	}

	public function button( $user ) {
		$stat = WPF()->sbscrb->Follows->user_is_following_this( WPF()->current_userid, $user['userid'] );
		$buttons = [];
		if( WPF()->tpl->can_view_template( 'followers', $user ) ){
			$buttons[] = sprintf(
				'<a href="%1$s">
		            <span class="wpforo-follow-user-followers-count">%2$d</span> 
		            <span class="wpforo-follow-user-followers-label">%3$s</span>
		        </a>',
				WPF()->member->get_profile_url( $user, 'followers' ),
				WPF()->sbscrb->Follows->get_count( [ 'itemid' => $user['userid'], 'itemtype' => 'user', 'active' => true ] ),
				wpforo_phrase('Followers', false)
			);
		}
		if( WPF()->tpl->can_view_template( 'following', $user ) ){
			$buttons[] = sprintf(
				'<a href="%1$s">
		            <span class="wpforo-follow-user-following-count">%2$d</span> 
		            <span class="wpforo-follow-user-following-label">%3$s</span>
		        </a>',
				WPF()->member->get_profile_url( $user, 'following' ),
				WPF()->sbscrb->Follows->get_count( [ 'userid' => $user['userid'], 'itemtype' => 'user', 'active' => true ] ),
				wpforo_phrase('Following', false)
			);
		}
		return sprintf(
			'<div class="wpforo-follow-wrap">
				%1$s
			    %2$s
		    </div>',
			( ! WPF()->current_object['user_is_same_current_user'] ? sprintf(
				'<div class="wpforo-follow-user" data-userid="%1$d" data-stat="%2$d">
			       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 116.42 122.88" style="enable-background:new 0 0 116.42 122.88" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;} .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#3AAF3C;}</style><g><path class="st0" d="M5.95,112.26c-5.1-0.39-6.33-4.06-5.86-8.29c2.79-24.96,30.78-17.73,42.03-27.86l0,0 c5.61,16.5,29.05,17.11,34.31,0c1.21,1.09,2.89,2.01,4.87,2.82c-1.81,1.1-3.52,2.43-5.09,4c-7.93,7.92-9.88,19.57-5.86,29.33H5.95 L5.95,112.26z M41.97,59.56c2.13,3.37,4.36,6.83,7.12,9.37c2.66,2.43,5.9,4.09,10.16,4.1c4.64,0.01,8.01-1.7,10.76-4.28 c2.86-2.67,5.11-6.34,7.34-10l5.98-9.84c1.11-2.55,1.52-4.25,1.26-5.25c-0.16-0.59-0.81-0.88-1.92-0.93 c-0.23-0.01-0.48-0.01-0.72-0.01c-0.26,0.01-0.54,0.03-0.84,0.05c-0.17,0.01-0.31,0-0.46-0.03c-0.52,0.03-1.08-0.01-1.63-0.09 l2.04-9.06c-15.19,2.39-26.55-8.88-42.59-2.25l1.16,10.67c-0.63,0.04-1.25,0.01-1.82-0.07C28.6,42.24,40.16,56.67,41.97,59.56 L41.97,59.56L41.97,59.56L41.97,59.56z M84.74,40.01c1.47,0.45,2.41,1.38,2.8,2.89c0.43,1.67-0.04,4.03-1.46,7.25l0,0 c-0.03,0.06-0.05,0.12-0.09,0.17l-6.04,9.95c-2.33,3.84-4.69,7.69-7.85,10.63c-3.26,3.06-7.3,5.1-12.81,5.08 c-5.14-0.01-9.02-1.97-12.2-4.89c-3.84-3.52-21.52-25.66-13.62-30.99c0.39-0.25,0.82-0.48,1.28-0.65 c-0.35-4.58-0.47-10.34-0.25-15.17c0.12-1.14,0.34-2.28,0.65-3.43c1.35-4.85,4.76-8.75,8.96-11.43c2.32-1.48,4.87-2.59,7.51-3.33 c1.68-0.48-1.43-5.87,0.3-6.03c8.41-0.87,22.05,6.82,27.93,13.19c2.93,3.18,4.8,7.41,5.2,13L84.74,40.01L84.74,40.01L84.74,40.01 L84.74,40.01L84.74,40.01L84.74,40.01z"/><path class="st1" d="M95.32,80.66c11.66,0,21.11,9.45,21.11,21.11c0,11.66-9.45,21.11-21.11,21.11c-11.66,0-21.11-9.45-21.11-21.11 C74.21,90.11,83.66,80.66,95.32,80.66L95.32,80.66L95.32,80.66L95.32,80.66z M87.77,100.17c1.58,0.91,2.61,1.67,3.83,3.02 c3.17-5.11,6.62-7.94,11.1-11.97l0.44-0.17h4.91c-6.58,7.3-11.68,13.33-16.24,22.13c-2.38-5.08-4.5-8.59-9.23-11.84L87.77,100.17 L87.77,100.17L87.77,100.17z"/></g></svg>
			       <span class="wpforo-follow-user-label">%3$s</span>
			    </div>',
				wpforo_bigintval( $user['userid'] ),
				intval( $stat ),
				( $stat ? wpforo_phrase('Unfollow', false) : wpforo_phrase('Follow', false) )
			) : ''),
			( $buttons ? sprintf('<div class="wpforo-follow-tabs">%1$s</div>', implode( '<span>/</span>', $buttons ) ) : '' )
		);
	}
}
