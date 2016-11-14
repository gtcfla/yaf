<?php
/**
 * @name IndexController
 * @author root
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends BaseController
{

	public function indexAction()
	{
		$myjj = array(
				/**
				 * 名言警句
				 */
				'不要使一生庸庸碌碌、匆匆奔忙，以至于忘记了自己曾去过何处，今后又要去往何方。',
				'销售是从被别人拒绝开始的。',
				'即使爬到最高的山上，一次也只能脚踏实地地迈一步。',
				'世界会向那些有目标和远见的人让路。',
				'人之所以能，是相信能。',
				'努力让每一天的生活过得好，过得有意义，你就会乐观而充实的度过你的整个人生。',
				'即使是不成熟的尝试，也胜于胎死腹中的策略。',
				'蚁穴虽小，溃之千里。',
				'顾客后还有顾客，服务的开始才是销售的开始。',
				'成功的法则极为简单，但简单并不代表容易。',
				'赚钱之道很多，但是找不到赚钱的种子，便成不了事业家。',
				'世上并没有用来鼓励工作努力的赏赐，所有的赏赐都只是被用来奖励工作成果的。',
				'挫折其实就是迈向成功所应缴的学费。',
				'推销产品要针对顾客的心，不要针对顾客的头。',
				'想法决定行动，行动决定结果。',
				'选择可能难，能坚持自我的选择更需要自持力。',
				'相信自己，相信伙伴。把握先机，容易成功。',
				'任何的限制，都是从自己的内心开始的。',
				'投资知识是明智的，投资网络中的知识就更加明智。',
				'行动是治愈恐惧的良药，而犹豫、拖延将不断滋养恐惧。',
				'每一日你所付出的代价都比前一日高，因为你的生命又消短了一天，所以每一日你都要更积极。今天太宝贵，不应该为酸苦的忧虑和辛涩的悔恨所销蚀，抬起下巴，抓住今天，它不再回来。',
				'只有不断找寻机会的人才会及时把握机会。',
				'环境不会改变，解决之道在于改变自己。',
				'无论才能、知识多么卓着，如果缺乏热情，则无异纸上画饼充饥，无补于事。',
				'只有通过你自己的实践经历与认真思考之后，才知道什么东西对你最好、什么事情对你最重要。',
				'忘掉失败，不过要牢记失败中的教训。',
				'不要害怕遭遇风险。只有通过冒险，我们才能学会如何变的勇敢。',
				'不要总拿自己与别人相比，从而造成你失去自信，并贬低了你自身的价值。',
				'人之所以有一张嘴，而有两只耳朵，原因是听的要比说的多一倍。',
				'当一个小小的心念变成成为行为时，便能成了习惯;从而形成性格，而性格就决定你一生的成败。',
				'坚韧是成功的一大要素，只要在门上敲得够久、够大声，终会把人唤醒的。',
				'成功需要成本，时间也是一种成本，对时间的珍惜就是对成本的节约。',
				'如果我们想要更多的玫瑰花，就必须种植更多的玫瑰树。',
				'回避现实的人，未来将更不理想。',
				'事实上，成功仅代表了你工作的1%，成功是99%失败的结果。',
				'与其临渊羡鱼，不如退而结网。',
				'不要轻言放弃，否则对不起自己!',
				'当你感到悲哀痛苦时，最好是去学些什么东西。学习会使你永远立于不败之地。',
				'环境永远不会十全十美，消极的人受环境控制，积极的人却控制环境。',
				'旁观者的姓名永远爬不到比赛的计分板上。',
				'未曾失败的人恐怕也未曾成功过。',
				'靠山山会倒，靠水水会流，靠自己永远不倒。',
				'除了我个体的强大以外，还因为我属于团队!',
				'机会总在怀疑、犹豫中产生，在叫好、后悔中结束。',
				'成功都是血汗的洗染，无悔走完希望每一天。',
				'销售世界上第一号的产品--不是汽车，而是自己。在你成功地把自己推销给别人之前，你必须百分之百的把自己推销给自己。',
				'好的想法是十分钱一打，真正无价的是能够实现这些想法的人。',
				'生活中最基本的技巧是交流，最可依赖的品质是耐心，最糟糕的行为是抱怨，最易见效 的努力是从自己做起。',
				'行动是成功的阶梯，行动越多，登得越高。',
				'没有口水与汗水，就没有成功的泪水。',
				'成功属于永远不放弃的人。',
				'没有一种不通过蔑视、忍受和奋斗就可以征服的命运。',
				'人生伟业的建立，不在能知，乃在能行。',
				'苦想没盼头，苦干有奔头。',
				'心有多大，舞台就有多大!',
				'要像监守生命一样监守它们，因为一旦你丢失了它们，生活就会变的毫无意义。',
				'出门走好路，出口说好话，出手做好事。',
				'积极的人在每一次忧患中都看到一个机会，而消极的人则在每个机会都看到某种忧患。',
				'没有天生的信心，只有不断培养的信心。',
				'不要忘记--一个人最大的感情需要是取得别人的赏识和尊重。',
				'忍别人所不能忍的痛，吃别人所别人所不能吃的苦，是为了收获得不到的收获。',
				'最有效的资本是我们的信誉，它24小时不停为我们工作。',
				'积极思考造成积极人生，消极思考造成消极人生。',
				'世界上那些最容易的事情中，拖延时间最不费力。',
				'一个能从别人的观念来看事情，能了解别人心灵活动的人，永远不必为自己的前途担心。',
				'你的脸是为了呈现上帝赐给人类最贵重的礼物--微笑，一定要成为你工作最大的资产。',
				'当一个人先从自己的内心开始奋斗，他就是个有价值的人。',
				'如果你还可以努力，可以付出，就不要轻言停止和放弃。',
				'人因为梦想而伟大，早日达到自己的目标。',
				'伟人所达到并保持着的高处，并不是一飞就到的，而是他们在同伴们都睡着的时候，一步步艰辛地向上攀爬的。',
				'人生的成功不过是在紧要处多一份坚持，人生的失败往往是在关键时刻少了坚持。',
				'一个有信念者所开发出的力量，大于99个只有兴趣者。',
				'伟人之所以伟大，是因为他与别人共处逆境时，别人失去了信心，他却下决心实现自己的目标。',
				'世上没有绝望的处境，只有对处境绝望的人。',
				'做事的能力往往只能给你一种机会，而做人的能力则会给你一百种机会。',
				'若不给自己设限，则人生中就没有限制你发挥的藩篱。',
				'没有退路就是最好的退路!',
				'忍耐力较诸脑力，尤胜一筹。',
				'每一个成功者都有一个开始。勇于开始，才能找到成功的路。',
				'脚踏实地向前走，阳光总在风雨后，风雨过后有彩虹。',
		);
		$this->_view->assign('myjj', $myjj[rand(0, count( $myjj )-1 )]); // 随机名言警句
		$this->_view->assign('content', 'hello world!');
		$this->view();
	}
}
