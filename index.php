<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/html" xml:lang="en">
<head>
    <?php include("getroots.php"); ?>
    <?php include("lib/headcontent.php");
    ?>
    <title>CS 211: Introduction to Computer Science II</title>
</head>

<body>
<div class="container">

<?php include("lib/pagehead.php"); ?>
<?php include("lib/sidebar.php"); ?>

<div class="content">

<div class="item">

<p>CS 211 is the second course in the three-term &ldquo;Introduction to
    Computer Science&rdquo; series at University of Oregon. CS 211
    builds on the computational problem solving and Python programming
    skills developed in CS 210 and introduces object-oriented
    programming techniques. </p>
<p>The CS 21x series at University of Oregon is a core requirement for
    students majoring in computer science, data science, math and
    computer science, and cybersecurity. It is also appropriate for
    students who intend to develop computational approaches for other
    fields. </p>


<h2>Learning Objectives</h2>

<p>Upon successful completion of CS 211, you should be able to:</p>
<ul>
<li>Understand <em>classes</em> and <em>objects</em> in an
object-oriented programming language, including polymorphism and
inheritance. You will develop both an operational understanding (e.g.,
what happens when we construct an object) and and a basic knowledge of
idiomatic problem solving tactics in object-oriented programming.
<ul>
<li>
    As an example of operational understanding, you will develop a clear
    understanding of <em>aliasing</em>, when two names provide access to
    the same object. In addition to avoiding undesirable side-effects
    through aliasing, you will use aliasing intentionally to simplify
    code by maintaining multiple collections of the same objects.
</li>

<li>As an example of idiomatic patterns, you will use subclasses to
    represent leaves (the base case) and internal nodes (the recursive
    case) in tree-structured data, and use dynamic dispatch rather than
    explicit <tt>isinstance</tt> tests to select the appropriate method
    for each case.
</li>
</ul>
</li>
<li>Decompose a moderately complex problem specification into parts that
    can be solved piece-by-piece, testing your solution at each stage in
    development. Employ <em>separation of concerns</em> in principled
    decomposition of a program into parts that can evolve independently.
</li>
<li>Write software source code that clearly communicates intent to human
    readers as well as correctly expressing intended instructions for
    the computer.
</li>
<li>Reason about asymptotic performance characteristics (that is,
    relation of time and space requirements to problem size) well enough
    to devise programs with acceptable performance on moderate to large
    problems. (More sophisticated reasoning about asymptotic performance
    is developed in CIS 212, CIS 313, and CS 35.)
</li>
</ul>


<p>In addition, we will investigate the relation between programming in
    a high level language like Python and execution of binary machine
    code on hardware. While computer architecture is not a core learning
    objective of CS 211, we have found a basic, simplified introduction
    at this level helps prepare CS majors for the material they will
    encounter in CS 314, Machine Organization. Non-majors may find it
    useful background for a variety of applications, such as lab
    instrumentation in the natural sciences, remote sensing in
    geographic information systems, or interfacing sensors and actuators
    in home automation projects.</p>
<p> After completing our unit on computer representation and operation,
you should understand binary representation and operations such as
shifting and  bitwise <em>and</em> and <em>or</em> sufficiently to
write Python programs
that pack fields into an integer and unpack them. You will understand
fundamental concepts of computer architecture, including the
fetch/decode/execute cycle of a central processing unit, registers and
main memory, the program counter register, and the relation between
higher level languages, assembly language, and machine code. You will
not be expected to devise complex assembly language programs, but you
will be able to read and understand basic sequences of assembly language
instructions including loops. </p>

<h2>Acquired Skills</h2>
<ul>
<li>You will use a integrated programming environment (IDE) such as <em>VS
        Code</em> or <em>PyCharm</em>, including a code editor and a
    debugger, to develop program source code.
</li>
<li>You will write and execute unit test cases in the Python <tt>unittest</tt>
    testing framework.
</li>
<li>You will execute Python programs from the command line as well as
    within your IDE of choice. 
</li>
</ul>

<div class="item">
<h1>Text</h1>
<p>We will use a free, online textbook,
    <a href="https://uo-cs-oer.github.io/CS211-text/intro.html"
       target="cs211-text">Introduction to Computer Science, Part
        II</a></p>


<h2>Approach</h2>
<p>CS 211 is not easy. We want to challenge you, but also to give you
    the support you need to succeed. Expect to work hard.
    We are here to help you get the most from your effort. </p>
<p>In CS 211, you will complete a programming project most weeks, and in
    some weeks you will complete an additional mini-project. You will
    complete three mini-exams during the term and an individual code
    demo, in addition to a final exam at the conclusion of the
    course. </p>
<p>CS 211 projects are designed to inspire you as well as to help
you develop understanding of the concepts and techniques we cover in
class. Many of them touch briefly on approaches that you may study in
depth later, either in another class or on your own, to apply in your
research or career. For example, you will have a brief exposure to the
Python regular expression library. You will <em>not</em> become
proficient in using regular expressions in CS 210, but some day later
when you encounter a research or job project for which regular
expressions are the appropriate tool, you may remember them
enough to go teach yourself enough to apply them for the task at hand.
</p>
<p>While we do grade projects, they are a minor part of your CS 211
grade. Projects are primarily for practice and to provide you <em>formative</em>
feedback, i.e., to help you learn rather than to measure your learning.
If you not only complete the projects but really understand them, you
should be well-prepared for the exams that are the largest component of
your grade. Approach them in that spirit. Do not be satisfied with
having gotten your project to work. Make sure you understand it well
enough that you can apply the same approaches to similar problems.</p>
<p>We provide extensive help sessions as well as discussion and help
    through an online platform (currently MS Teams). Use these not just
    to get through the projects, but to really <em>understand</em> them.
    Use them also to discuss concepts, pose and answer related
    questions, and clarify anything that you find confusing. Only you
    are in charge of your learning, but if you take the initiative, we
    are here to help you achieve the understanding you need to become a
    proficient computational problem solver. </p>
</div>
</div> <!-- class content -->

<?php include("lib/pagefoot.php"); ?>
</div>

</body>

</html>
