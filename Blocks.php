<?php

/**
 * Default block template
 **/
return [

    /**
     * Heading
     */
    ['core/heading', [
        'level' => 1,
        'content' => 'Center-aligned image']],

    /**
     * Image
     */
    ['core/image', [
        'align' => 'center',
        'url'   => 'https://source.unsplash.com/random/1600x799']],

    /**
     * Separators
     */
    ['core/separator', ['className' => 'is-style-default']],
    ['core/separator', ['className' => 'is-style-dots']],
    ['core/separator', ['className' => 'is-style-wide']],

    /**
     * Paragraph
     */
    ['core/paragraph', [
        'content' => "Talent is its own expectation, Jim: you either live up to it or it waves a hankie, receding forever. Use it or lose it, he say over the newspaper. I’m… I’m just afraid of having a tombstone that says HERE LIES A PROMISING OLD MAN. Potential maybe worse than none, Jim. Than no talent to fritter in the first place, lying around guzzling because I haven’t the balls to…God I’m I’m so sorry Jim. You don’t deserve to see me like this. I’m so scared, Jim. I’m so scared of dying without ever really being seen. Can you understand? Are you enough of a big thin prematurely stooped young bespectacled man, even with your whole life still ahead of you, to understand? Can you see I was giving it all I had?"]],

    /**
     * Cover Wide
     */
    ['core/cover', [
        'align'   => 'wide',
        'url'     => 'https://source.unsplash.com/random/1600x798',
        'title'   => 'Wide alignment image block']],

    /**
     * Cover Full
     */
    ['core/cover', [
        'align'   => 'full',
        'url'     => 'https://source.unsplash.com/random/1600x797',
        'title'   => 'Full alignment image block']],

    /**
     * Heading 1
     */
    ['core/heading', [
        'level'   => 1,
        'content' => 'Heading 1']],

    /**
     * Heading 2
     */
    ['core/heading', [
        'level'   => 2,
        'content' => 'Heading 2']],

    /**
     * Heading 3
     */
    ['core/heading', [
        'level'   => 3,
        'content' => 'Heading 3']],

    /**
     * Heading 4
     */
    ['core/heading', [
        'level'   => 4,
        'content' => 'Heading 4']],

    /**
     * Paragraph
     */
    ['core/paragraph', [
        'content' => "People of a certain age and level of like life-experience believe they’re immortal: college students and alcoholics/addicts are the worst: they deep-down believe they’re exempt from the laws of physics and statistics that ironly govern everybody else. They’ll piss and moan your ear off if somebody else fucks with the rules, but they don’t deep down see themselves subject to them, the same rules. And they’re constitutionally unable to learn from anybody else’s experience: if some jaywalking B.U. student does get his car towed, your other student’s or addict’s response to this will be to ponder just what imponderable difference makes it possible for that other guy to get splattered or towed and not him, the ponderer. They never doubt the difference — they just ponder it. It’s like a kind of idolatry of uniqueness."]],

    /**
     * Button
     */
    ['core/button', [
        'url'   => 'https://www.youtube.com/watch?v=oHg5SJYRHA0',
        'text'  => 'Find out more',
        'align' => 'center']],

    /**
     * Separator
     */
    ['core/separator', ['className' => 'is-style-dots']],

    /**
     * Paragraph
     **/
    ['core/paragraph', [
        'content' => "It’s the mornings after the spider-and-heights dreams that are the most painful, that it takes sometimes three coffees and two showers and sometimes a run to loosen the grip on his soul’s throat; and these post-dream mornings are even worse if he wakes unalone, if the previous night’s Subject is still there, wanting to twitter, or to cuddle and, like, spoon, asking what exactly is the story with the foggy inverted tumblers on the bathroom floor, commenting on his night-sweats, clattering around in the kitchen, making kippers or bacon or something more hideous and unhoneyed he’s supposed to eat with post-coital male gusto, the ones who have this thing about they call it Feeding My Man, wanting a man who can barely keep down A.M. honey-toast to east with male gusto, elbows out and sovelling, making little noises. Even when alone, unable to uncurl alone and sit slowly up and wing out the sheet and go to the bathroom, these darkest mornings start days that Orin can’t even bring himself for hours to think about how he’ll get through the day. These worst mornings with cold floors and hot windows and merciless light — the soul’s certainty that the day will have to be not traversed but sort of climbed, vertically, and then that going to sleep again at the end of it will be like falling, again, off something tall and sheer."]],

    /**
     * Gallery (1x3)
     */
    ['core/gallery', [
        'align'    => 'full',
        'columns'  => 3,
        'images'   => [
            ['url' => 'https://source.unsplash.com/random/1197x600'],
            ['url' => 'https://source.unsplash.com/random/1196x599'],
            ['url' => 'https://source.unsplash.com/random/1195x598']]]],

    /**
     * Quote
     */
    ['core/quote', [
        'value'    => "<p>“What people don’t get about being hideously or improbably deformed is that the urge to hide is offset by a gigantic sense of shame about your urge to hide.”</p>",
        'citation' => 'Madame Psychosis']],

    /**
     * Vimeo
     */
    ['core-embed/vimeo', [
        'caption' => '<em>écoute: El Guincho</em>',
        'align'   => 'wide',
        'url'     => 'https://vimeo.com/70237487']],

    /**
     * Columns > Column
     */
    ['core/columns', [], [
        ['core/column', [], [
            ['core/image', [
                'url'     => 'https://source.unsplash.com/random/1600x1600',
                'caption' => '“Please learn the pragmatics of expressing fear: sometimes words that seem to express really invoke.”']]
        ]],
        ['core/column', [], [
            ['core/paragraph', [
                'content' => "‘My application’s not bought,’ I am telling them, calling into the darkness of the red cave that opens out before closed eyes. ‘I am not just a boy who plays tennis. I have an intricate history. Experiences and feelings. I’m complex. ’I read,’ I say. ‘I study and read. I bet I’ve read everything you’ve read. Don’t think I haven’t."]],
        ]],
    ]],

    /**
     * YouTube
     */
    ['core-embed/youtube', [
        'caption' => 'Youtube embed block test',
        'align'   => 'center',
        'url'     => 'https://www.youtube.com/watch?v=oHg5SJYRHA0']],

    /**
     * Paragraph
     */
    ['core/paragraph', [
        'content' => "I consume libraries. I wear out spines and ROM-drives. I do things like get in a taxi and say, “The library and step on it.” My instincts concerning syntax and mechanics are better than your own, I can tell, with due respect. But it transcends the mechanics. I’m not a machine. I feel and believe. I have opinions. Some of them are interesting. I could, if you’d let me, talk and talk. Let’s talk about anything. I believe the influence of Kierkegaard on Camus is underestimated. I believe Dennis Gabor may very well have been the Antichrist. I believe Hobbes is just Rousseau in a dark mirror. I believe, with Hegel, that transcendence is absorption. I could interface you guys right under the table,’ I say. ‘I’m not just a creatus, manufactured, conditioned, bred for a function.’"]],

    /**
     * Pullquote
     */
    ['core/pullquote', [
        'value'    => "<p>“He wakes up soaked, fetally curled, entombed in that kind of psychic darkness where you’re dreading whatever you think of.”</p>",
        'citation' => 'Madame Psychosis',
        'align'    => 'full']],

    /**
     * Gallery (3x2)
     */
    ['core/gallery', [
        'align'    => 'full',
        'columns'  => 3,
        'images'   => [
            ['url' => 'https://source.unsplash.com/random/1200x600'],
            ['url' => 'https://source.unsplash.com/random/1200x599'],
            ['url' => 'https://source.unsplash.com/random/1200x598'],
            ['url' => 'https://source.unsplash.com/random/1200x597'],
            ['url' => 'https://source.unsplash.com/random/1200x596'],
            ['url' => 'https://source.unsplash.com/random/1200x595']]]],

    /**
     * Pullquote
     */
    ['core/pullquote', [
        'value'     => "<p>“The United States: a community of sacred individuals which reveres the sacredness of the individual choice. The individual’s right to pursue his own vision of the best ratio of pleasure to pain: utterly sacrosanct.”</p>",
        'citation'  => 'Madame Psychosis',
        'align'     => 'full']],

    /**
     * Gallery (2x3)
     */
    ['core/gallery', [
        'align'    => 'full',
        'columns'  => 2,
        'images'   => [
            ['url' => 'https://source.unsplash.com/random/1200x594'],
            ['url' => 'https://source.unsplash.com/random/1200x593'],
            ['url' => 'https://source.unsplash.com/random/1200x592'],
            ['url' => 'https://source.unsplash.com/random/1200x591'],
            ['url' => 'https://source.unsplash.com/random/1200x590'],
            ['url' => 'https://source.unsplash.com/random/1199x590']]]],
];
