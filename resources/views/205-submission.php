<html>
    <style>
        .box {
            display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
            display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
            display: -ms-flexbox;      /* TWEENER - IE 10 */
            display: -webkit-flex;     /* NEW - Chrome */
            display: flex;             /* NEW, Spec - Opera 12.1, Firefox*/
            align-items: center;
            flex-direction: column;
            font-family:verdana;
            font-size:18px;
        }
        .titleBox{
            font-size:22px;
        }
        .contentBox{
            flex-direction: row;
            text-align: center;
        }
        .leftContainer{
            flex-direction: column;
            float: left;
            justify-content: space-around;
        }
        .rightContainer{
            flex-direction: column;
            float: right;
            justify-content: space-around;
        }
        .item{
            padding: 5px;
            width: 500px;
            margin-top: 10px;
            
            color: gray;
            text-align: left;
            font-size:14px;
        }
    </style>
    <title>
        Technology: the good, the bad, and the ugly
    </title>
    <head>

    </head>
    <body>
    <div class="box">
        <div class="titleBox">
            <strong>Technology: the good, the bad, (<del>and the ugly</del>)</strong><br>
        </div>
        <div class="contentBox">
            A brief list of the ways in which technology has caused problems within our <br>
            society, as well as ways it has helped.<br>
            <div class="leftContainer">
                <strong>The good</strong>
                <div class="item">
                    <embed src=http://www.wired.com/2016/01/zcash-an-untraceable-bitcoin-alternative-launches-in-alpha/ width=500 height=600><br>  Published -- 20th January 
                    <a href=http://www.wired.com/2016/01/zcash-an-untraceable-bitcoin-alternative-launches-in-alpha/>link</a>
                    <br>
                    <br>

                    Bitcoin has grown into a big thing in the past couple of years - but in the eyes of the creators of zcash - 
                    has one big flaw; anyone can see the history of transaction for any given piece of the currency.
                    This is the case because of the way bitcoin works; bitcoin keeps a large 'blockchain' in the public 
                    view which ensures that bitcoins cannot be spent twice (each block keeps a hash of the previous block, meaning
                    that modification to one block would have a knock on effect on all subsequent blocks). 
                    <br><br>

                    Zcash believes that your personal transactions should be private, and has devised a way to create 
                    a truly anonymous untraceable bitcoin. However noble this premise may seem at first, it does not 
                    come without its drawbacks - any money can be used for anything at any time. When you go to the 
                    corner shop and purchase a sandwich and a drink, you can be fairly sure you're not laundering or 
                    funding any illicit activities - perhaps not so with zcash. Despite this, I believe that the 
                    decoupling this untraceability creates from government control will give people a power they did not
                    previously have. 
                </div>
                <div class="item">
                    <embed src=http://bigthink.com/neurobonkers/a-pirate-bay-for-science width=500 height=600><br> Published -- February 2016 
                    <a href=http://bigthink.com/neurobonkers/a-pirate-bay-for-science>link</a>
                    <br>
                    <br>

                    This is the launch of a 'Pirate Bay' for science - a massive repository of research articles
                    that would usually be hidden behind a paywall. Essentially the article says that the cost of
                    a subscription to a large academic publisher has reached costs that are extortionate. The reason
                    for this being that these publishers abuse their position of 'prestige' to force researchers
                    to have to publish with them in order for them to get an audience. 
                    Given that most research is publically funded, it seems a massive waste, and a shame, that 
                    this research is then put behind locked doors. Not only that, but for people who need access
                    to it, such paywalls impose a massive barrier in the sense of not only inconvenience - but cost.
                </div>
                <div class="item">
                    <embed src=http://www.infoq.com/news/2016/02/oh-dear-github width=500 height=600><br> Published -- 12th February  
                    <a href=http://www.infoq.com/news/2016/02/oh-dear-github>link</a>
                    <br>
                    <br>

                    This is a response to a letter from the open source community pointing out flaws in the way
                    GitHub currently functions; it is a real demonstration of both the power of the voice of people  
                    when given the appropriate platform, as well as the good things that can be accomplished when 
                    companies like GitHub listen to those voices, instead of trying to battle them, as too often is
                    the case.
                </div>
                <div class="item">
                    <embed src=http://www.milesbrundage.com/blog-posts/alphago-and-ai-progress width=500 height=600><br> Published -- 27th February 
                    <a href=http://www.milesbrundage.com/blog-posts/alphago-and-ai-progress>link</a>
                    <br>
                    <br>

                    An interesting article which discusses the relative progress of the AlphaGo AI (famously beating
                    Lee Sedol - a professional Go players) when taking into account the computing power it uses. 
                    Other AI have come close <i> ish </i> to the AlphaGo AI in terms of skill - but what this 
                    article brings into question is how big that gap is when you consider the sheer computing power that 
                    AlphaGo employs - namely 280 GPUs and 1920 CPUs. 'After a brief search into the clusters currently used
                    for different Go programs, I was unable to find any using more than 36 or so CPUs' - I suspect most of 
                    these algorithms are open source by developers trying to build something cool - and not backed by 
                    a gigantic coorporation such as Google. It is, however, very impressive that AlphaGo can scale up to 
                    use such a large amount of resources.
                </div>
                <div class="item">
                    <embed src=http://www.reuters.com/article/google-selfdrivingcar-idUSL2N1681DP width=500 height=600><br> Published -- 28th February 
                    <a href=http://www.reuters.com/article/google-selfdrivingcar-idUSL2N1681DP>link</a>
                    <br>
                    <br>

                    Despite this being an accident - I feel that this still represents a crucial point in AI. For one thing - 
                    Google's self driving cars have been driving around California for years without any accident that was the fault
                    of the car itself. This is the first case of such an accident, and it gives researchers at Google an opportunity
                    and data to find out what went wrong, and prevent issues occurring in the future.
                </div>
                <div class="item">
                    <embed src=http://phys.org/news/2016-02-drones-forest-trails-lost-people.html width=500 height=600><br> Published -- 10th February 
                    <a href=http://phys.org/news/2016-02-drones-forest-trails-lost-people.html>link</a>
                    <br>
                    <br>

                    Again, another advancement in AI that has allowed a very useful humanitarian functionality. The big mile-stone 
                    needed to overcome here being the difficult drones have in demanding terrain where there are small spaces and lots 
                    of things to avoid - 'In these environments, any little error may result in a crash'. Many drones operate very 
                    high up so as to avoid this exact problem, but this is an example of researchers tackling this problem head on, 
                    and succeeding. Interestingly (as with a lot of recent AI developments e.g. AlphaGo ) the researchers involved 
                    also made use of deep neural networks to create these drones.
                </div>
                <div class="item">

                    <embed src=http://www.anandpraka.sh/2016/03/how-i-could-have-hacked-your-facebook.html width=500 height=600><br> Published -- 7th March 
                    <a href=http://www.anandpraka.sh/2016/03/how-i-could-have-hacked-your-facebook.html>link</a>
                    <br>
                    <br>

                    Post-mortem exploit explanations are fairly common occurrence in the tech news world, but they represent something
                    which is beneficial to people as a whole - harmony between security researchers, and big tech companies with lots 
                    of money and lots of lawyers. It took a while to foster this culture of bounty programs, but has now been adopted
                    by most big tech companies, thus allowing security researchers to find and disclose issues with the companies - and 
                    once the issue is resolved - publishing a full disclosure of the exploit. These disclosures help other people build
                    more secure systems, the bounty programs help researchers find real issues (and get paid), and companies get real 
                    security flaws discovered and disclosed to them comparatively cheaply (as well as providing potential attackers an
                    alternative motive).
                                        
                </div>
                <div class="item">

                    <embed src=http://www.nytimes.com/2016/03/13/opinion/sunday/should-all-research-papers-be-free.html width=500 height=600><br> Published -- 12th March 
                    <a href=http://www.nytimes.com/2016/03/13/opinion/sunday/should-all-research-papers-be-free.html>link</a>
                    <br>
                    <br>

                    A discussion whether research papers should be free - '“Realistically only scientists at really big, well-funded universities
                    in the developed world have full access to published research,” said Michael Eisen, a professor of genetics, genomics and 
                    development at the University of California, Berkeley'. 
                    It discusses the case of Aaron Swartz, who was charged with wire fraud and various other things under the Computer Misuse act
                    after he tried to download articles from JSTOR, at MIT. He eventually hanged himself as a result of the pressure the government
                    placed on him.
                    Freedom of information is incredibly important in this modern age, and large coorporations who create a culture of prestige, whereby
                    researchers are judged by which journal they have been published in. This places a lot of power in the hands of these coorporations,
                    and allows them to charge whatever they want. 
                    This article yet again brings this issue into the spotlight, and will hopefully contribute to the mass of attention given to this problem 
                    lately - maybe change is not far away.
                </div>
            </div>
            <div class="rightContainer">
                <strong>The bad</strong>
                <div class="item">
                    <embed src=http://crookedtimber.org/2016/01/11/aaron-swartz-died-three-years-ago-today/ width=500 height=600> Published -- 11th January  
                    <a href=http://crookedtimber.org/2016/01/11/aaron-swartz-died-three-years-ago-today/>link</a>
                    <br>
                    <br>

                    A look at the things that made Aaron Swartz such a big influence in many of his public causes, and why his death caused such
                    a massive outcry. His crime of downloading academic articles from MIT servers was met with a massively disproportionate penalty
                    - prosecutors threatened Swartz with 7 years in jail for a crime that was non-remunerative, non-destructive, and applied
                    to a first-time defendant. These threats were intended to instill fear, satisfy the coorperations that Swartz downloaded
                    articles from, and coerce him. Along with the fact that the defense itself would cost thousands, if not hundreds of thousands of dollars
                    to maintain - as well as the possibility of a massive fine - the tactic the DoJ employed were unethical, and resulted in the loss of 
                    an individual who was clearly a great asset to the public as a whole.

                </div>
                <div class="item">

                    <embed src=https://krebsonsecurity.com/2016/02/this-is-why-people-fear-the-internet-of-things/ width=500 height=600> Published -- 16th February 
                    <a href=https://krebsonsecurity.com/2016/02/this-is-why-people-fear-the-internet-of-things/>link</a>
                    <br>
                    <br>

                    This article investigates a variety of chinese built peripherals with surreptitiously installed 'features' which connect and
                    transmit regular data to unidentified sources, and which are incredibly difficult to turn off without in depth knowledge about
                    the device itself. It comments on the bigger picture, and how consumers are supposed to trust that their devices aren't 
                    secretly taking pictures of them, or otherwise transmitting private data to third parties. It makes the reader wonder what 
                    measures are in place for detecting this sort of behaviour (besides users noticing), as well as how easy it might be for a
                    manufacturer to install some backdoor into a device without the consumer's knowledge.
                </div>
                <div class="item">

                    <embed src=https://www.zerotier.com/blog/?p=724 width=500 height=600> Published -- 19th February  
                    <a href=https://www.zerotier.com/blog/?p=724>link</a>
                    <br>
                    <br>

                    More of a slight gripe than anything on the seemingly peculiar design decisions of the IPv6 protocol, such as the decision
                    to include the colon as a separator between parts of the numeric address; raising the issue that if a port needs to be
                    specified after the address (with a colon), there would be no distinction between the port number, and just another part 
                    of the numeric address. In order to get around this, the designers of IPv6 added brackets e.g. http://[dead:beef::1]:1234/
                    Not to mention that added so many colons necessitate the use of an extra (shift) key, which represents another (albeit minor)
                    hassle.
                </div>
                <div class="item">
                    <embed src=http://techcrunch.com/2016/02/29/snapchat-employee-data-leaks-out-following-phishing-attack/ width=500 height=600> Published -- 29th February  
                    <a href=http://techcrunch.com/2016/02/29/snapchat-employee-data-leaks-out-following-phishing-attack/>link</a>
                    <br>
                    <br>

                    This article is yet another example of how easy it can be to get private information out of a company - a simple phishing 
                    email to the right person, and sensitive data is out in the wild. Social engineering attacks such as phishing attacks will
                    probably plague information security for a long time. A system is only as secure as the people using it, at least until some
                    method is devised of attempting to mitigate leaks like this. Some companies do disallow certains types of email attachments,
                    and implement systems that check the type of file ( for example banning the sending of zip files) but these types of systems
                    are often circumnavigated by simply adding a different file extension to the end ( file1.zip.docx for example).
                    Attempting to train staff about what may constitute certain types of social engineering attacks is another way to try to 
                    mitigate the problem - but even then, it only takes 1 email to the wrong person to send out sensitive information.
                    Information security still has a long way to go, and this is a big obstacle that may take a very long time to overcome.

                </div>
                <div class="item">

                    <embed src=https://theintercept.com/2016/03/08/snowden-fbi-claim-that-only-apple-can-unlock-phone-is-bullshit/ width=500 height=600> Published -- 3rd March 
                    <a href=https://theintercept.com/2016/03/08/snowden-fbi-claim-that-only-apple-can-unlock-phone-is-bullshit/>link</a>
                    <br>
                    <br>

                    The US government doesn't seem to like all this encryption stuff that's become very popular lately. There's a lot of speculation
                    as to why that's the case, probably because Apple (and others) wants its customers to see it as secure, as infosec has been in the
                    center of the public eye in a lot of recent news - most notably the Sony hack.
                    The Electronic Frontier Foundation and many other security experts have asked the court to throw out the unconstitutional order
                    to make Apple build a method of breaking into an iPhone without causing the phone to wipe its contents after a particular number
                    of PIN code guesses. It's peculiar that the FBI should ask this of Apple, as it has been stated (by Edward Snowden himself) that
                    the NSA almost certainly has the tools to succesfully accomplish just that. It seems the FBI want the power to do it themselves
                    (perhaps the NSA is very protective of its exploits - lest they be patched?). 
                </div>
                <div class="item">

                    <embed src=http://thehackernews.com/2016/03/whatsapp-encryption.html width=500 height=600> Published -- 15th March 
                    <a href=http://thehackernews.com/2016/03/whatsapp-encryption.html>link</a>
                    <br>
                    <br>

                    Another disappointing case of the US government attempting to snoop on its citizens, and have encryption block its way - so it gets up
                    in arms and takes the case to the courts! This time, it appears the government obtained a wiretap court order for messages between some
                    individuals, but found that the messages were encrypted, and couldn't read them. Due to the way that modern cryptography works, no one 
                    except the intended recipient of the message is capable of decrypting the message. Therefore, whatsapp would most likely have to break their
                    encryption for <i> everyone </i> in order to comply with this order. It's a shame to keep seeing the US government attempting to 
                    force companies to weaken their encryption.
                </div>
                <div class="item">
                    <embed src=https://www.teamupturn.com/reports/2016/what-isps-can-see width=500 height=600> Published -- March 
                    <a href=https://www.teamupturn.com/reports/2016/what-isps-can-see>link</a>
                    <br>
                    <br>

                    An in depth look at how much isps can see of their subscribers - as it turns out, they can see quite a lot. Not only that, but can also
                    infer a lot of sensitive information about their customers. This carries over into encrypted communication as well - if only through 
                    visibility of the customer DNS queries - although checking these this is a common method of monitoring what a customer is viewing. /
                </div>
                <div class="item">
                    <embed src=http://arstechnica.com/tech-policy/2016/02/jury-apple-must-pay-626-million-to-patent-troll-virnetx/ width=500 height=600> Published -- 3rd February
                    <a href=http://arstechnica.com/tech-policy/2016/02/jury-apple-must-pay-626-million-to-patent-troll-virnetx/>link</a>
                    <br>
                    <br>

                    Patent trolls are a relatively new phenomena where a company applies for vague patents en-masse, and then frivolously litigates as many companies 
                    'relevant' to them as possible. While large companies can afford the expense of defending their patents (such as apple in this case, despite their lack
                    of success), smaller companies cannot come up with the time or money required to prepare a defense, and often end up simply settling. A big win from 
                    a patent troll such as this will only encourage more patent trolls - more companies need to spend the extra resources to beat these trolls, and discourage
                    them from litigating in the future. Some legislation of some form should also be passed to deal with these companies which are so obviously detrimental to society.
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
