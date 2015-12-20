class Gamer

  def initialize(name, library)
    @playing = false
    @library = library
    @name = name
  end

  def play_game(request, console)
    @console = console
    @library.each {|item|
      if item != request
        return "#{@name} doesn't own that game!"
      else
        @game = request
        @playing = true
        return "#{@name} is now playing #{@game} on their #{@console}"
      end
    }
  end

  def stop_playing(reason)
    @playing = false
    @reason = reason
    return "#{@name} stopped playing, because #{@reason}"
  end

  def is_playing?()
    if @playing == true
      return "#{@name} is still playing #{@game} on their #{@console}"
    elsif @reason != nil
      return "#{@name} isn't playing anything because #{@reason}!"
    else
      "#{@name} isn't playing anything yet!"
    end
  end
 end

JonJon = Gamer.new("Jon", ["SR3", "Star Wars"])
Lauren = Gamer.new("Lauren", ["Fallout 4","DA:Origins", "Hyrule Warriors", "Rare Replay"])


p JonJon.play_game("SR3","XBox360")
p JonJon.is_playing?()
p JonJon.stop_playing("CUZ")
p JonJon.is_playing?()
p Lauren.play_game("Star Wars","XBox360")
p Lauren.is_playing?()