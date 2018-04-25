#! mgilber1/bin/phython

import tweepy

consumer_key = '9GiWgkvfBbASkGmuIZuD3Ng6t'
consumer_key_secret = '4XN3G8BdpmmFi8DGKBqazcjO16HM5rsACsjAe5vi0BRDlcR1dv'

access_token = '981594005543600128-ybJL3gjFsg8ocHja4nuODOFOB7oCy9U'
access_token_secret = 'NLAQAkoQPVATZvgnDgOFhpAytcnRxTRaHDZNkQBgkzNip'

class TweetListener(tweepy.StreamListener):
    def on_status(self, status):
        print('Tweet text: ' + status.text)
        return True
    def on_error(self, status_code):
	print('Got and error with status code: ' + str(status_code))
	return True
    def on_timeout(self):
	print('Timeout..')
	return True

if __name__ == '__main__':
    listener = TweetListener()
    auth = tweepy.OAuthHandler(consumer_key, consumer_key_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = tweepy.Stream(auth, listener)
    stream.filter(follow=[], track=['#SFGiants','#Athletics','#csc412'])
