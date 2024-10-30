<?php
/**
 * @ * @package HelloGandhi
 * @version 1.1
 */

/*
Plugin Name: Hello Gandhi
Plugin URI: http://earthbound.com/plugins/hello-gandhi.php
Description: Not just a plugin, this plugin echos the hope and insight of a generationial thinker and pays homage to the bundled plugin included in every WordPress install: Hello Dolly. When activated you will see a random quote from Mahatma Gandhi displayed at the top of the admin screen. In addition to paying homage, this plugin was also an exercise in OOing a WordPress plugin.
Author: Adam Silverstein
Version: 1.1
Author URI: http://earthbound.com/
*/
class HelloGandhi {
	public function __construct()
	{
		add_action( 'admin_notices', array( $this, 'hello_gandhi' ) );
	}

	function hello_gandhi() {
		echo ( '<p class="gandhiquote"><em><h3>' .
		$this->get_a_quote() .
		' ~ Mahatma Gandhi</h3></em></p>' );
	}

	function get_a_quote() {
		$quotes="A ‘No’ uttered from the deepest conviction is better than a ‘Yes’ merely uttered to please, or worse, to avoid trouble.
A coward is incapable of exhibiting love; it is the prerogative of the brave.
A man is but the product of his thoughts what he thinks, he becomes.
A man who was completely innocent, offered himself as a sacrifice for the good of others, including his enemies, and became the ransom of the world. It was a perfect act.
A nation's culture resides in the hearts and in the soul of its people.
A small body of determined spirits fired by an unquenchable faith in their mission can alter the course of history.
Action expresses priorities.
Action is no less necessary than thought to the instinctive tendencies of the human frame.
All the religions of the world, while they may differ in other respects, unitedly proclaim that nothing lives in this world but Truth.
Always aim at complete harmony of thought and word and deed. Always aim at purifying your thoughts and everything will be well.
An error does not become truth by reason of multiplied propagation, nor does truth become error because nobody sees it.
An eye for an eye only ends up making the whole world blind.
An ounce of practice is worth more than tons of preaching.
Anger and intolerance are the enemies of correct understanding.
Anger is the enemy of non-violence and pride is a monster that swallows it up.
Before the throne of the Almighty, man will be judged not by his acts but by his intentions. For God alone reads our hearts.
Confession of errors is like a broom which sweeps away the dirt and leaves the surface brighter and clearer. I feel stronger for confession.
Culture of the mind must be subservient to the heart.
Each one has to find his peace from within. And peace to be real must be unaffected by outside circumstances.
Each one prays to God according to his own light.
Even if you are a minority of one, the truth is the truth.
Every formula of every religion has in this age of reason, to submit to the acid test of reason and universal assent.
Everyone who wills can hear the inner voice. It is within everyone.
Faith is not something to grasp, it is a state to grow into.
Faith… must be enforced by reason… when faith becomes blind it dies.
Fear has its use but cowardice has none.
Fear of death makes us devoid both of valour and religion. For want of valour is want of religious faith.
First they ignore you, then they laugh at you, then they fight you, then you win.
Freedom is never dear at any price. It is the breath of life. What would a man not pay for living?
Freedom is not worth having if it does not connote freedom to err.
Gentleness, self-sacrifice and generosity are the exclusive possession of no one race or religion.
Glory lies in the attempt to reach one’s goal and not in reaching it.
Happiness is when what you think, what you say, and what you do are in harmony.
I am prepared to die, but there is no cause for which I am prepared to kill.
I believe in the fundamental truth of all great religions of the world.
I claim to be a simple individual liable to err like any other fellow mortal. I own, however, that I have humility enough to confess my errors and to retrace my steps.
I do not want to foresee the future. I am concerned with taking care of the present. God has given me no control over the moment following.
I have nothing new to teach the world. Truth and Non-violence are as old as the hills. All I have done is to try experiments in both on as vast a scale as I could.
I like your Christ, I do not like your Christians. Your Christians are so unlike your Christ.
I look only to the good qualities of men. Not being faultless myself, I won’t presume to probe into the faults of others.
I reject any religious doctrine that does not appeal to reason and is in conflict with morality.
I suppose leadership at one time meant muscles; but today it means getting along with people.
If I had no sense of humor, I would long ago have committed suicide.
Imitation is the sincerest flattery.
In a gentle way, you can shake the world.
In matters of conscience, the law of the majority has no place.
In prayer it is better to have a heart without words than words without a heart.
It is any day better to stand erect with a broken and bandaged head then to crawl on one’s belly, in order to be able to save one’s head.
It is better to be violent, if there is violence in our hearts, than to put on the cloak of nonviolence to cover impotence.
It is easy enough to be friendly to one’s friends. But to befriend the one who regards himself as your enemy is the quintessence of true religion. The other is mere business.
It is health that is real wealth and not pieces of gold and silver.
Justice that love gives is a surrender, justice that law gives is a punishment.
Live as if you were to die tomorrow. Learn as if you were to live forever.
Man becomes great exactly in the degree in which he works for the welfare of his fellow-men.
Man falls from the pursuit of the ideal of plan living and high thinking the moment he wants to multiply his daily wants. Man’s happiness really lies in contentment.
Man should forget his anger before he lies down to sleep.
My life is my message.
Nearly everything you do is of no importance, but it is important that you do it.
Nobody can hurt me without my permission.
Non-violence and truth are inseparable and presuppose one another.
Non-violence is not a garment to be put on and off at will. Its seat is in the heart, and it must be an inseparable part of our being.
Non-violence is the first article of my faith. It is also the last article of my creed.
Non-violence is the greatest force at the disposal of mankind. It is mightier than the mightiest weapon of destruction devised by the ingenuity of man.
Non-violence requires a double faith, faith in God and also faith in man.
Non-violence, which is the quality of the heart, cannot come by an appeal to the brain.
One’s own religion is after all a matter between oneself and one’s Maker and no one else’s.
Peace is its own reward.
Power is of two kinds. One is obtained by the fear of punishment and the other by acts of love. Power based on love is a thousand times more effective and permanent then the one derived from fear of punishment.
Prayer is the key of the morning and the bolt of the evening.
Providence has its appointed hour for everything. We cannot command results, we can only strive.
Purity of personal life is the one indispensable condition for building up a sound education.
Rights that do not flow from duty well performed are not worth having.
Satisfaction lies in the effort, not in the attainment, full effort is full victory.
Satisfaction lies in the effort, not in the attainment, full effort is full victory.
Service which is rendered without joy helps neither the servant nor the served. But all other pleasures and possessions pale into nothingness before service which is rendered in a spirit of joy.
Spiritual relationship is far more precious than physical. Physical relationship divorced from spiritual is body without soul.
Strength does not come from physical capacity. It comes from an indomitable will.
That service is the noblest which is rendered for its own sake.
The best way to find yourself is to lose yourself in the service of others.
The difference between what we do and what we are capable of doing would suffice to solve most of the world’s problem.
The essence of all religions is one. Only their approaches are different.
The greatness of a nation can be judged by the way its animals are treated.
The human voice can never reach the distance that is covered by the still small voice of conscience.
The main purpose of life is to live rightly, think rightly, act rightly. The soul must languish when we give all our thought to the body.
The moment there is suspicion about a person’s motives, everything he does becomes tainted.
The only tyrant I accept in this world is the still voice within.
The pursuit of truth does not permit violence on one’s opponent.
The weak can never forgive. Forgiveness is the attribute of the strong.
There is a sufficiency in the world for man’s need but not for man’s greed.
There is more to life than increasing its speed.
There is no principle worth the name if it is not wholly good.
Those who know how to think need no teachers.
To believe in something, and not to live it, is dishonest.
To deprive a man of his natural liberty and to deny to him the ordinary amenities of life is worse then starving the body; it is starvation of the soul, the dweller in the body.
To give pleasure to a single heart by a single act is better than a thousand heads bowing in prayer.
Truth is by nature self-evident. As soon as you remove the cobwebs of ignorance that surround it, it shines clear.
Truth never damages a cause that is just.
Truth stands, even if there be no public support. It is self-sustained.
Unwearied ceaseless effort is the price that must be paid for turning faith into a rich infallible experience.
We do not need to proselytize either by our speech or by our writing. We can only do so really with our lives. Let our lives be open books for all to study.
We may have our private opinions but why should they be a bar to the meeting of hearts?
We may never be strong enough to be entirely nonviolent in thought, word and deed. But we must keep nonviolence as our goal and make strong progress towards it.
We win justice quickest by rendering justice to the other party.
What is true of the individual will be tomorrow true of the whole nation if individuals will but refuse to lose heart and hope.
Where there is love there is life.
You can chain me, you can torture me, you can even destroy this body, but you will never imprison my mind.
You must be the change you wish to see in the world.
You must not lose faith in humanity. Humanity is an ocean; if a few drops of the ocean are dirty, the ocean does not become dirty.";
	$quotes = explode( "\n", $quotes );
	$quote  = $quotes[ mt_rand( 0, count ( $quotes ) - 1 ) ];
	return ( wptexturize( $quote ) );
	}
}

$HelloGandhi = new HelloGandhi();


